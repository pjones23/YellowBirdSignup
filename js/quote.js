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
                createStockChart(data);
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

function createStockChart(info){

    /*
     Params vary for each Type.
     The following Types accept Params.
     For the other types, Params should be null or an empty array.
     "sma": [period], "price": ["ohlc"] for open/high/low/close, ["c"] for close only.
     */
    var Element = { "Symbol":info.symbol, "Type":"price", "Params":["c"] };
    var InteractiveChartDataInput = { "Normalized":false, "NumberOfDays":1000, "DataPeriod":"Day", "Elements":[Element]};

    console.log(Element);
    console.log(InteractiveChartDataInput);

    var encodedJSONObject = JSON.stringify(InteractiveChartDataInput);

    console.log(encodedJSONObject);

    $.ajax({
        url : "chartLookup.php",
        data : {
            'parameters' : encodedJSONObject
        },
        context : document.body,
        async : false,
        type : 'GET',
        dataType : "json",
        success : function(data) {
            console.log(data);
            drawChart(data, info.symbol);
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Response Text: " + jqXHR.responseText)
            console.log("Error: " + errorThrown);
            status = textStatus;
        }
    });
}

function drawChart(chartData, symbol){
    var dataObject = {

        global: {
            useUTC: true
        },

        rangeSelector: {
            selected: 0,
            inputEnabled: $('#container').width() > 300
        },

        title: {
            text: null
        },

        series: [{
            name: symbol,
            data: chartData,
            tooltip: {
                valueDecimals: 2
            }
        }]
        ,

        chart: {
            renderTo: 'container',
            type: 'line'
        }

    };

    var chart = new Highcharts.StockChart(dataObject);
}

