/**
 * Created by perron on 2/2/15.
 */

function productLookup(){
    var searchText = $("#companyText").val();
    console.log(searchText);
    var status = null;
    $.ajax({
        url : "quote.php",
        data : {
            'action' : "productlookup",
            'search' : searchText
        },
        context : document.body,
        async : false,
        type : 'GET',
        dataType : "xml",
        success : function(data) {
            console.log(data);
            status = data;
            var xml = $(data);
            var products = xml.find('Product');
            console.log(products.length);
            var companyList = document.getElementById('companyList');
            if(products.length > 0){
                products.each(function(){
                    // Get the company name
                    var companyName = $(this).find('companyName').text();
                    // Get the company symbol
                    var symbol = $(this).find('symbol').text();
                    var companyInfo = companyName + " (symbol: " + symbol + ")";
                    var companyItem = document.createElement('li');
                    companyItem.innerHTML = "<a companyName='"+ companyName +"' symbol='"+ symbol +"' onclick='quoteLookup(this)'>" + companyInfo + "</a>";
                    companyList.appendChild(companyItem);
                });
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Response Text: " + jqXHR.responseText)
            console.log("Error: " + errorThrown);
            status = textStatus;
        }
    });

    $('#companyDialog').dialog("open");

    return {"status" : status};
}

function quoteLookup(companyElement){
    console.log(companyElement);
    var companyName = companyElement.getAttribute("companyName");
    var symbol = companyElement.getAttribute("symbol");
    getQuote(symbol);
}

function populateQuoteDetails(){

}

function getQuote(searchText){
    console.log(searchText);
    var status = null;
    $.ajax({
        url : "quote.php",
        data : {
            'action' : "quote",
            'search' : searchText
        },
        context : document.body,
        async : false,
        type : 'GET',
        dataType : "xml",
        success : function(data) {
            console.log(data);
            status = data;
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