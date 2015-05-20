<?php
/**
 * Created by PhpStorm.
 * User: perron
 * Date: 5/19/15
 * Time: 4:45 PM
 */

if (isset($_GET['parameters'])){
    $parameters = $_GET['parameters'];
    // Ensure the search term is not an empty string
    if(trim($parameters) == false){
        echo "<response><status>FAILURE</status><message>Parameters field is empty.</message></response>";
    }
    else {
        $url = "http://dev.markitondemand.com/Api/v2/InteractiveChart/json?parameters=".$parameters;
        $info = file_get_contents($url);
        $chartInfo = json_decode($info);

        $symbol = $chartInfo->Elements[0]->Symbol;
        $dates = $chartInfo->Dates;
        $unixDates = array();
        foreach($dates as $date){
            // strtotime converts the date to unix time
            // x1000 converts the unix time to epoch
            $epoch = strtotime($date." GMT") * 1000;
            array_push($unixDates, $epoch);
        }
        $closingPrices = $chartInfo->Elements[0]->DataSeries->close->values;

        $chart = array();
        for ($x = 0; $x < count($unixDates); $x++) {
            array_push($chart, array($unixDates[$x], $closingPrices[$x]));
        }

        echo json_encode($chart);
    }
}
else{
    echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
}

?>