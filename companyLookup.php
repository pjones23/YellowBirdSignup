<?php
/**
 * Created by PhpStorm.
 * User: perron
 * Date: 2/21/15
 * Time: 8:08 PM
 */

// Use Google Finance to lookup company name and symbol
// https://www.google.com/finance/match?matchtype=matchall&q=<search term>

if (isset($_GET['term'])){
    $search = $_GET['term'];
    // Ensure the search term is not an empty string
    if(trim($search) == false){
        echo "<response><status>FAILURE</status><message>Search term is empty.</message></response>";
    }
    else {
        $url = "http://dev.markitondemand.com/Api/v2/Lookup/json?input=".$search;
        $info = file_get_contents($url);
        $jsonDecodedInfo = json_decode($info);

        $companyArray = array();

        foreach($jsonDecodedInfo as $company){
            //print($company->n." (".$company->t.") Exhange Market: ".$company->e."\n");
            if($company->Name != null && $company->Name != "" && $company->Symbol != null && $company->Symbol != "") {
                if($company->Exchange == "NYSE" || $company->Exchange == "NASDAQ") {
                    // Filter only New York Stock Exchange (NSYE) & NASDAQ
                    $companyItem = array("label" => $company->Name . " (" . $company->Symbol . ")", "value" => $company->Symbol);
                    array_push($companyArray, $companyItem);
                }
            }
        }
        echo json_encode($companyArray);
    }
}
else{
    echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
}

?>
