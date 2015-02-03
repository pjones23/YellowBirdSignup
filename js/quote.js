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
            console.log("Data Success");
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

function getQuote(searchText){
    var searchText = $("#companyText").val();
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
            console.log("Data Success");
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