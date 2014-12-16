/**
 * Created by Perron on 12/12/2014.
 */

function addSubscriber(email){
    var status = null;
    var refCode = null;
    var message = null;
    $.ajax({
        url : "addSubscriber.php",
        data : {
            'action' : "add",
            'email' : email
        },
        context : document.body,
        async : false,
        type : 'POST',
        dataType : "json",
        success : function(data) {
            console.log("Data Success");
            console.log(data);
            status = data.status;
            if(status == "SUCCESS"){
                refCode = data.refCode;
            }
            else{
                message = data.message;
            }
        },
        error : function(jqXHR, textStatus, errorThrown) {
            console.log("Status: " + textStatus);
            console.log("Response Text: " + jqXHR.responseText)
            console.log("Error: " + errorThrown);
            status = textStatus;
        }
    });

    return {"status" : status, "email" : email, "refCode" : refCode, "message" : message};
}

function incrementRefCounter(refCode){
    var status = null;
    $.ajax({
        url : "addSubscriber.php",
        data : {
            'action' : "increment",
            'refcode' : refCode
        },
        context : document.body,
        async : false,
        type : 'POST',
        dataType : "json",
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