/**
 * Created by Perron on 12/16/2014.
 */

function signup(reference){
    // Get the email from the input;
    var email = document.getElementById("email").value;

    // add email to MailChimp YellowBird List
    var mailChimpInfo = addSubscriberToMailChimp(email);
    if(mailChimpInfo.status != "SUCCESS"){
        console.log("Failed to insert into MailChimp YellowBird list.");
    }

    // add email to the YellowBird list of subscribers
    var info = addSubscriber(email);
    if(info.status == "SUCCESS") { // populate reference code and open modal
        populateShareModal(info, reference);

        // open modal
        $('#hiddenSubmit').click();
    }
    else{
        // Check if the user already exists and open up a modal showing the refCode and round number
        populateShareModal(info, undefined);

        // open modal
        $('#hiddenSubmit').click();
    }

}

function populateShareModal(info, reference){
    // populate reference field
    var refCodeField = document.getElementById('uniqueURL');
    refCodeField.value = yellowBirdURL +"?ref="+ info.refCode;

    // populate Twitter share href
    var twitterBtn = document.getElementById('share_twitter');
    twitterBtn.onclick = function(){
        window.open('https://twitter.com/intent/tweet?url=' + yellowBirdURL + '?ref=' + info.refCode +';text=YellowBird+is+a+gamified+stock+market+education+platform.+Reserve+your+spot+today+at+' + yellowBirdURL + '?ref=' + info.refCode +'&amp;via=getyellowbird', '_blank', 'width=550,height=500');
    };

    // populate Facebook share href
    var fbBtn = document.getElementById('share_facebook');
    fbBtn.onclick = function() {
        window.open('https://www.facebook.com/sharer/sharer.php?u='+ yellowBirdURL +'?ref='+ info.refCode +'', '_blank', 'width=550,height=500');
    };

    // populate mail share href
    var mailBtn = document.getElementById('share_email');

    mailBtn.onclick = function () {
        var subject = "Stock market education—gamified!";
        var body = "YellowBird is a free educational platform that teaches users how to invest in the stock market. " + yellowBirdURL + "?ref=" + info.refCode;
        // brings up default mail client
        document.location.href = "mailto:?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
    }

    // Increment the reference counter if a reference code was used
    if(reference != undefined){
        var increment = incrementRefCounter(reference);
    }
}