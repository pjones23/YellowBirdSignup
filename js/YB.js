/**
 * Created by Perron on 12/16/2014.
 */

function signup(){
    // Get the email from the input;
    var email = document.getElementById("email").value;
    console.log(email);
    // add email to the YellowBird list of subscribers
    var info = addSubscriber(email);
    if(info.status == "SUCCESS") { // populate reference code and open modal
        // populate reference field
        var refCodeField = document.getElementById('uniqueURL');
        refCodeField.value = info.refCode;
        // open modal
        $('#hiddenSubmit').click();
    }

}
