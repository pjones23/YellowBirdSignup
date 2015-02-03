<?php
/**
 * Created by PhpStorm.
 * User: perron
 * Date: 2/2/15
 * Time: 9:52 AM
 */

if (isset($_GET['action'])){
    $action = $_GET['action'];
    if($action == "productlookup"){
        if (isset($_GET['search'])){
            $search = $_GET['search'];
            // Ensure the search term is not an empty string
            if(trim($search) == false){
                echo "<response><status>FAILURE</status><message>Search term is empty.</message></response>";
            }
            else {
                $url = "https://etwssandbox.etrade.com/market/sandbox/rest/productlookup?consumerKey=849ff72c94e6b931395b7acdda44c52c&company=".$search."&type=EQ";
                $info = file_get_contents($url);
                echo $info;
            }
        }
        else{
            echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
        }
    }
    if($action == "quote"){
        if (isset($_GET['search'])){
            $search = $_GET['search'];
            // Ensure the search term is not an empty string
            if(trim($search) == false){
                echo "<response><status>FAILURE</status><message>Search term is empty.</message></response>";
            }
            else {
                $url = "https://etwssandbox.etrade.com/market/sandbox/rest/quote/".$search."?consumerKey=849ff72c94e6b931395b7acdda44c52c";
                $info = file_get_contents($url);
                echo $info;
            }
        }
        else{
            echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
        }
    }
}
else{
    echo "<response><status>FAILURE</status><message>No action is set.</message></response>";
}

/*
$url = "https://etwssandbox.etrade.com/market/sandbox/rest/quote/GOOG?consumerKey=849ff72c94e6b931395b7acdda44c52c";
$url = "https://etwssandbox.etrade.com/market/sandbox/rest/productlookup?consumerKey=849ff72c94e6b931395b7acdda44c52c&company=Google&type=EQ";
$info = file_get_contents($url);
echo $info;
*/

?>