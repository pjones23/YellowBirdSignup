/**
 * Created by perron on 2/2/15.
 */

function companyLookup(){
    var searchText = $("#companyText").val();
    var companies = null;
    $.ajax({
        url : "companyLookup.php",
        data : {
            'term' : searchText
        },
        context : document.body,
        async : false,
        type : 'GET',
        dataType : "json",
        success : function(data) {
            console.log(data);
            // Populate quote info with data
            companies = data;

        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Response Text: " + jqXHR.responseText)
            console.log("Error: " + errorThrown);
            status = textStatus;
        }
    });

    return companies;
}

function productLookup(){
    var searchText = $("#companyText").val();
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

function createStockChart(info){

    /*
     Params vary for each Type.
     The following Types accept Params.
     For the other types, Params should be null or an empty array.
     "sma": [period], "price": ["ohlc"] for open/high/low/close, ["c"] for close only.
     */
    var Element = { "Symbol":info.symbol, "Type":"price", "Params":["c"] };
    // Number of Days is 1461 to go back 4 years (365.25 * 4)
    var InteractiveChartDataInput = { "Normalized":false, "NumberOfDays":1461, "DataPeriod":"Day", "Elements":[Element]};

    console.log(Element);
    console.log(InteractiveChartDataInput);

    var encodedJSONObject = JSON.stringify(InteractiveChartDataInput);

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
            drawChart(data, info);
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Response Text: " + jqXHR.responseText)
            console.log("Error: " + errorThrown);
            status = textStatus;
        }
    });
}

function drawChart(chartData, info){

    Highcharts.setOptions({
        lang: {
            rangeSelectorZoom :""
        }
    });

    var options = {
        rangeSelector: {
            allButtonsEnabled: true,
            selected: 0,
            inputEnabled: false, // Old value: $('#container').width() > 300

            buttons: [{
                type: 'day',
                count: 1,
                text: '1D',
                dataGrouping: {
                    forced: true,
                    units: [['hour', [24]]]
                }
            }, {
                type: 'month',
                count: 1,
                text: '1M'
            }, {
                type: 'year',
                count: 1,
                text: '1Y'
            }, /*{
                type: 'ytd',
                text: 'YTD'
            }, {
                type: 'all',
                text: 'all'
            },*/ {
                type: 'year',
                count: 4,
                text: '4Y',
                dataGrouping: {
                    forced: true,
                    units: [['day', [1]]]
                }
            }]
        },

        title: {
            text: info.symbol + " " + info.price
        },

        /*
        subtitle: {
            text: info.change + " " + info.percentChange
        },
        */

        series: [{
            name: info.symbol,
            data: chartData,
            tooltip: {
                valueDecimals: 2
            }
        }],

        navigation: {
            buttonOptions: {
                enabled: false
            }
        },

        navigator: {
            enabled: false
        },

        scrollbar: {
            enabled: false
        },

        credits: {
            enabled: false
        },

        chart: {
            renderTo: 'container',
            type: 'line',
            backgroundColor: 'rgba(200, 200, 255, 0)'
        }

    };

    var chart = new Highcharts.StockChart(options);
    createInvestment(chart, null);

    $(".highcharts-button").click(function(){
        createInvestment(chart, this);
    });

}

function createInvestment(chart, button){
    var currentDataPoints = chart.series[0].points;

    if(button == null){
        // Show the data points for the default, which is 1 day
        var firstPoint = currentDataPoints[currentDataPoints.length - 2];
        var lastPoint = currentDataPoints[currentDataPoints.length - 1];
    }
    else {
        var textElement = $(button).children("text")[0];
        var timeRange = $(textElement).text();
        switch (timeRange) {
            case "1D":
                var firstPoint = currentDataPoints[currentDataPoints.length - 2];
                var lastPoint = currentDataPoints[currentDataPoints.length - 1];
                break;
            default: // 1 month, 1 year, or 4 years
                var firstPoint = currentDataPoints[0];
                var lastPoint = currentDataPoints[currentDataPoints.length - 1];
        };
    }

    /*
     console.log(currentDataPoints);
     console.log(firstPoint);
     console.log(new Date(firstPoint.x).toGMTString());
     console.log(firstPoint.y);
     */
    var initialCost = firstPoint.y;
    /*
     console.log(lastPoint);
     console.log(new Date(lastPoint.x).toGMTString());
     console.log(lastPoint.y);
     */
    var finalCost = lastPoint.y;
    // get percentage change
    var costChange = finalCost - initialCost;
    var percentChange = costChange/initialCost;
    var prettyPercentChange = (percentChange * 100).toFixed(2);
    //console.log("cost change: " + costChange);

    var initialInvestment = 50;
    var newInvestment = initialInvestment + (initialInvestment * percentChange);
    var prettyNewInvestment = newInvestment.toFixed(2);
    /*
     console.log("initial investment: " + initialInvestment);
     console.log("new investment: " + prettyNewInvestment);
     console.log("percent change: " + prettyPercentChange);
     */
    $("#initial").text("$" + initialInvestment);
    $("#new").text("$" + prettyNewInvestment);
    $("#growth").text(prettyPercentChange + "%");

    if(costChange > 0){
        //$(".iphone-shell").css("background-color", "lightgreen");
        $(".stock-info").css("background-color", "lightgreen");
    }
    else{
        //$(".iphone-shell").css("background-color", "tomato");
        $(".stock-info").css("background-color", "tomato");
    }

}

