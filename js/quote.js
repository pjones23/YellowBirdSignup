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
            populateQuoteDetails(data);


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
    price.innerHTML = info.ask + '<div id="change" class="price-change">' + change + '</div>';

}
