/**
 * Created by Perron on 12/17/2014.
 */

var configJSLink = document.getElementById('configScript');
var config = null;

$.ajax({
    url : "config/config.php",
    data : {
        'env' : true
    },
    context : document.body,
    async : false,
    type : 'GET',
    dataType : "json",
    success : function(data) {
        console.log("Data Success");
        console.log(data);
        config = data.environment;
    },
    error : function(jqXHR, textStatus, errorThrown) {
        console.log("Status: " + textStatus);
        console.log("Response Text: " + jqXHR.responseText)
        console.log("Error: " + errorThrown);
    }
});

if(config != null){
    if(config == "local"){
        configJSLink.src = "config/local/config.js";
    }
    else if(config == "beta"){
        configJSLink.src = "config/beta/config.js";
    }
    else if(config == "prod"){
        configJSLink.src = "config/prod/config.js";
    }

}
