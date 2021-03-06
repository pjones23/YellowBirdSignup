/**
 * Created by Perron on 12/12/2014.
 */

function addSubscriber(email){
    var status = null;
    var refCode = null;
    var refCount = null;
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
            refCode = data.refCode;
            refCount = data.refCount;
            if(status == "FAILURE"){
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

    return {"status" : status, "email" : email, "refCode" : refCode, "refCount" : refCount, "message" : message};
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

function addSubscriberToMailChimp(email){
    var status = null;
    $.ajax({
        url : "mailChimpSubscribe.php",
        data : {
            'email' : email
        },
        context : document.body,
        async : false,
        type : 'POST',
        dataType : "json",
        success : function(data) {
            console.log("Data Success");
            console.log(data);
            status = "SUCCESS";
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

function sendAddConfirmEmail(email, refCode){
    var status = null;
    $.ajax({
        url : "email.php",
        data : {
            'email' : email,
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

function getPosition(email){
    var status = null;
    var position = null;
    $.ajax({
        url : "addSubscriber.php",
        data : {
            'action' : "position",
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
            position = data.position;
            if(status == "FAILURE"){
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

    return {"status" : status, "position" : position};
}