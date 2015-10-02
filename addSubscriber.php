<?php
/**
 * Created by PhpStorm.
 * User: Perron
 * Date: 12/11/2014
 * Time: 10:45 PM
 */

if (isset($_POST['action'])) {

    require_once('config/config.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $action = $_POST['action'];
    if($action == "add"){
        if (isset($_POST['email'])) {
            $email = (string)$_POST['email'];
            $response = addToSubscriberList($email);
            echo json_encode($response);
        }
        else{
            echo json_encode(array('status' => 'FAILURE', 'message' => 'POST data (email) not set'));
        }
    }
    elseif($action == "increment"){
        if (isset($_POST['refcode'])) {
            $refCode = (string)$_POST['refcode'];
            $response = incrementRefCount($refCode);
            echo json_encode($response);
        }
        else{
            echo json_encode(array('status' => 'FAILURE', 'message' => 'POST data (refcode) not set'));
        }
    }
    elseif($action == "position"){
        if (isset($_POST['email'])) {
            $email = (string)$_POST['email'];
            $response = getSignupPosition($email);
            echo json_encode($response);
        }
        else{
            echo json_encode(array('status' => 'FAILURE', 'message' => 'POST data (email) not set'));
        }
    }

    $conn->close();
}
else{
    echo json_encode(array('status' => 'FAILURE', 'message' => 'POST data (action) not set'));
}

function generateRefCodeFromDatabase($refCode)
{
    /*
    Checks if refCode exist in the database
    */
    $generatedRef = NULL;
    global $conn;
    $refCode = $conn->real_escape_string($refCode);
    $query = sprintf("CALL generateRefCode('%s', @newRef)", $refCode);
    $query2 = sprintf("Select @newRef");
    if (!($conn->multi_query($query))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    if (!($conn->multi_query($query2))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    do {
        if ($res = $conn->store_result()) {
            if ($res->num_rows > 0) {
                $result = $res->fetch_assoc();
                $generatedRef = $result["@newRef"];
            }
            $res->free();
        } else {
            if ($conn->errno) {
                echo "Store failed: (" . $conn->errno . ") " . $conn->error;
            }
        }
    } while ($conn->more_results() && $conn->next_result());

    return $generatedRef;
}

function isEmailUnique($email)
{
    /*
    Checks if email exist in the database
    */
    $unique = true;
    $refCode = null;
    $refCount = null;
    global $conn;
    $email = $conn->real_escape_string($email);
    $query = sprintf("CALL IsEmail('%s')", $email);
    if (!($conn->multi_query($query))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    do {
        if ($res = $conn->store_result()) {
            if ($res->num_rows > 0) {
                $unique = false;
                $result = $res->fetch_assoc();
                $email = $result["email"];
                $refCode = $result["refcode"];
                $refCount = $result["refCount"];
            }
            $res->free();
        } else {
            if ($conn->errno) {
                echo "Store failed: (" . $conn->errno . ") " . $conn->error;
            }
        }
    } while ($conn->more_results() && $conn->next_result());

    return array("unique" => $unique, "email" => $email, "refCode" => $refCode, "refCount" => $refCount);
}

function createRefCode($email)
{
    $emailSplit = explode("@", $email);
    $emailPrefix = $emailSplit[0];
    $emailPrefix = trim($emailPrefix);
    $emailPrefix = str_replace(".", "_", $emailPrefix);
    $refCode = $emailPrefix;
    $generatedRefCode = generateRefCodeFromDatabase($refCode);
    return $generatedRefCode;
}

function createSubscriber($email, $refCode, $createDate)
{
    global $conn;
    $success = false;
    $email = $conn->real_escape_string($email);
    $query = sprintf("CALL addSubscriber('%s', '%s', '%s', @result)", $email, $refCode, $createDate);
    $query2 = sprintf("Select @result");
    if (!($conn->multi_query($query))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    if (!($conn->multi_query($query2))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    do {
        if ($res = $conn->store_result()) {
            if ($res->num_rows > 0) {
                $result = $res->fetch_assoc();
                if ($result["@result"] == 1) {
                    $success = "true";
                }
            }
            $res->free();
        } else {
            if ($conn->errno) {
                echo "Store failed: (" . $conn->errno . ") " . $conn->error;
            }
        }
    } while ($conn->more_results() && $conn->next_result());

    return $success;
}

function addToSubscriberList($email)
{
    $uniqueEmail = isEmailUnique($email);
    if ($uniqueEmail["unique"]) {
        $refCode = createRefCode($email);
        $createDate = date("Y-m-d H:i:s");
        $successfulCreation = createSubscriber($email, $refCode, $createDate);
        if ($successfulCreation) {
            // echo success
            $response = array('status' => 'SUCCESS',
                'email' => $email,
                'refCode' => $refCode);
        } else {
            // echo failure
            $response = array('status' => 'FAILURE',
                'message' => 'Failed to add to subscriber list');
        }
    } else {
        // echo email already exists
        $response = array('status' => 'FAILURE',
            'message' => 'Email already exists', "email" => $uniqueEmail["email"], "refCode" => $uniqueEmail["refCode"], "refCount" => $uniqueEmail["refCount"]);
    }
    return $response;
}

function incrementRefCount($refCode)
{
    /*
    Increment the ref counter for the user with the refCode
    */
    global $conn;
    $success = false;
    $email = $conn->real_escape_string($refCode);
    $query = sprintf("CALL incrementRefCount('%s', @result)", $refCode);
    $query2 = sprintf("Select @result");
    if (!($conn->multi_query($query))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    if (!($conn->multi_query($query2))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    do {
        if ($res = $conn->store_result()) {
            if ($res->num_rows > 0) {
                $result = $res->fetch_assoc();
                if ($result["@result"] == 1) {
                    $success = "true";
                }
            }
            $res->free();
        } else {
            if ($conn->errno) {
                echo "Store failed: (" . $conn->errno . ") " . $conn->error;
            }
        }
    } while ($conn->more_results() && $conn->next_result());

    return $success;
}

function getSignupPosition($email){
    /*
    Get subscriber's signup position
    */
    $status = "SUCCESS";
    $position = null;
    global $conn;
    $email = $conn->real_escape_string($email);
    $query = sprintf("CALL getPosition('%s')", $email);
    if (!($conn->multi_query($query))) {
        echo "CALL failed: (" . $conn->errno . ") " . $conn->error;
    }
    do {
        if ($res = $conn->store_result()) {
            if ($res->num_rows > 0) {
                $result = $res->fetch_assoc();
                $position = $result["position"];
            }
            $res->free();
        } else {
            if ($conn->errno) {
                echo "Store failed: (" . $conn->errno . ") " . $conn->error;
                $status = "FAILURE";
            }
        }
    } while ($conn->more_results() && $conn->next_result());

    return array("Status" => $status,"position" => $position);
}

?>