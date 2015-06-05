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
        $file = "companylist.csv";
        $info = file_get_contents($file);
        $companyList = explode("\n", $info);

        $companyArray = array();

        foreach($companyList as $company){
            //$companyItem = array("label" => $company->Name . " (" . $company->Symbol . ")", "value" => $company->Symbol);
            $company = explode(',', $company);
            $companyLabel = $company[1] . " (" . $company[0] . ")";
            $isCompanyMatch = strpos(strtolower($companyLabel), strtolower($search));
            if($isCompanyMatch !== false) {
                $companyItem = array("label" => $companyLabel, "value" => $company[0]);
                array_push($companyArray, $companyItem);
            }
        }
        echo json_encode($companyArray);
    }
}
else{
    echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
}

?>
