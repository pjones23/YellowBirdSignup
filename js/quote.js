/**
 * Created by perron on 2/2/15.
 */

function productLookup(){
    var searchText = $("#companyText").val();
    console.log(searchText);
    var status = null;
    $.ajax({
        url : "quoteLookup.php",
        data : {
            'symbol' : searchText
        },
        context : document.body,
        async : false,
        type : 'GET',
        dataType : "json",
        success : function(data) {
            console.log(data);
            // Populate quote info with data
            if(data.symbol != null && data.symbol != "") {
                populateQuoteDetails(data);
            }

        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Response Text: " + jqXHR.responseText)
            console.log("Error: " + errorThrown);
            status = textStatus;
        }
    });

    return {"status" : status};
}

function populateQuoteDetails(info){
    // Populate stock info with data
    var symbol = document.getElementById('symbol');
    var price = document.getElementById('price');
    var change = info.change + ' (' + info.percentChange + ')';

    symbol.innerHTML = info.symbol;
    price.innerHTML = info.price + '<div id="change" class="price-change">' + change + '</div>';

    // Retrieve the graph from yahoo finance
    /*
     Yahoo Finance API lets you retrieve graphs of stocks.

     The main url is http://chart.finance.yahoo.com/z?s=<company symbol>&t=1d&q=l&z=s

     For options to use, please refer to https://code.google.com/p/yahoo-finance-managed/wiki/miscapiImageDownload

     The result is a picture, so you just have to write (for eg in HTML):

     <img src="http://chart.finance.yahoo.com/z?s=<company symbol>&t=1d&q=l&z=s"/>
     */

    //var chart = document.getElementById('chart');
    //chart.src = "http://chart.finance.yahoo.com/z?s="+info.symbol+"&t=1d&q=l&z=s";

}
