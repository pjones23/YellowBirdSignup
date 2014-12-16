/**
 * Created by Perron on 12/16/2014.
 */

var yellowBirdURL = "https://www.beta.yellowbird.io/";

function signup(reference){
    // Get the email from the input;
    var email = document.getElementById("email").value;

    // add email to the YellowBird list of subscribers
    var info = addSubscriber(email);
    if(info.status == "SUCCESS") { // populate reference code and open modal
        // populate reference field
        var refCodeField = document.getElementById('uniqueURL');
        refCodeField.value = yellowBirdURL +"?ref="+ info.refCode;

        // populate Twitter share href
        var twitterBtn = document.getElementById('share_twitter');
        var twitterHREFText = "javascript:window.open('https://twitter.com/intent/tweet?url="+ yellowBirdURL +"?ref="+ info.refCode +";text=YellowBird+is+a+gamified+stock+market+education+platform.+Reserve+your+spot+today+at&amp;via=getyellowbird', '_blank', 'width=550,height=500');void(0);"
        twitterBtn.href = twitterHREFText;

        // populate Facebook share href
        var fbBtn = document.getElementById('share_facebook');
        var fbHREFText = "javascript:window.open('https://www.facebook.com/sharer/sharer.php?u="+ yellowBirdURL +"?ref="+ info.refCode +"', '_blank', 'width=550,height=500');void(0);"
        fbBtn.href = fbHREFText;

        // populate mail share href
        var mailBtn = document.getElementById('share_email');
        var mailHREFText = "mailto:?body=YellowBird%20is%20a%20free%20educational%20platform%20that %20teaches%20users%20how%20to%20invest%20in %20the%20stock%20market.%20" + yellowBirdURL +"?ref="+ info.refCode + ";subject=Stock%20market%20education—gamified!";
        mailBtn.href = mailHREFText;

        // Increment the reference counter if a reference code was used
        if(reference != undefined){
            var increment = incrementRefCounter(reference);
        }

        // open modal
        $('#hiddenSubmit').click();
    }
    else{
        // Check if the user already exists and open up a modal showing the refCode and round number
    }

}
