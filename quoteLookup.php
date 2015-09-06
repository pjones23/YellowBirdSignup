<?php
/**
 * Created by PhpStorm.
 * User: perron
 * Date: 2/21/15
 * Time: 10:42 PM
 */

// Use Yahoo Finance to lookup company quote
// http://finance.yahoo.com/d/quotes.csv?s=<company ticker symbol>&f=sb2b3jkc6p2
// s = Symbol
// f = Format
// For the format: (reference: http://www.jarloo.com/yahoo_finance/)
//      s = symbol
//      b2 = ask (realtime)
//      b3 = bid (realtime)
//      j = 52 week low
//      k = 52 week high
//      c6 = change (realtime)
//      p2 = change in percent (change in percent realtime seemed to show a formatting error)

if (isset($_GET['symbol'])){
    $search = $_GET['symbol'];
    // Ensure the search term is not an empty string
    if(trim($search) == false){
        echo "<response><status>FAILURE</status><message>Search term is empty.</message></response>";
    }
    else {
        $url = "http://finance.yahoo.com/d/quotes.csv?s=".$search."&f=sb2b3jkc6p2";
        $info = file_get_contents($url);
        $parsedInfo = explode(",", $info);

        $symbol = trim($parsedInfo[0]);
        $askPrice = trim($parsedInfo[1]);
        $bidPrice = trim($parsedInfo[2]);
        $week52low = trim($parsedInfo[3]);
        $week52high = trim($parsedInfo[4]);
        $change = trim($parsedInfo[5]);
        $percentChange = trim($parsedInfo[6]);

        // Remove unnecessary double quotes from request reply
        $symbol = str_replace('"', "", $symbol);
        $askPrice = str_replace('"', "", $askPrice);
        $bidPrice = str_replace('"', "", $bidPrice);
        $week52low = str_replace('"', "", $week52low);
        $week52high = str_replace('"', "", $week52high);
        $change = str_replace('"', "", $change);
        $percentChange = str_replace('"', "", $percentChange);


        $quote = array("symbol" => $symbol, "ask" => $askPrice, "bid" => $bidPrice, "52wklow" => $week52low,
            "52wkhigh" => $week52high, "change" => $change, "percentChange" => $percentChange);


        echo json_encode($quote);
    }
}
else{
    echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
}

?>