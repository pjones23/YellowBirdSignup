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
        $url = "http://dev.markitondemand.com/Api/v2/Quote/json?symbol=".$search;
        $info = file_get_contents($url);
        $quote = json_decode($info);

        $symbol = $quote->Symbol;
        $price = $quote->LastPrice;
        $change = $quote->Change;
        $percentChange = $quote->ChangePercent;

        $quote = array("symbol" => $symbol, "price" => $price, "change" => $change, "percentChange" => $percentChange);


        echo json_encode($quote);
    }
}
else{
    echo "<response><status>FAILURE</status><message>No search term is set.</message></response>";
}

?>