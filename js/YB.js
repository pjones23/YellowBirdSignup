    /**
 * Created by Perron on 12/16/2014.
 */

function signup(email, reference){

    // add email to MailChimp YellowBird List
    var mailChimpInfo = addSubscriberToMailChimp(email);
    if(mailChimpInfo.status != "SUCCESS"){
        console.log("Failed to insert into MailChimp YellowBird list.");
    }

    // add email to the YellowBird list of subscribers
    var info = addSubscriber(email);
    if(info.status == "SUCCESS") { // populate reference code and open modal
        populateRefPage(info, true);

        // Increment the reference counter if a reference code was used
        if(reference != undefined && reference != null && reference != ""){
            var increment = incrementRefCounter(reference);
        }

        // sent the email
        sendAddConfirmEmail(email, info.refCode);

    }
    else{
        // Check if the user already exists and open up a modal showing the refCode and round number
        populateRefPage(info, false);

    }

}

function populateRefPage(info, newSubscription){

    // populate heading message
    /*
    var shareMessageHeading = document.getElementById('signup_heading');
    if(newSubscription == true){
        shareMessageHeading.innerHTML = "Thanks For Signing Up";
    }
    else{
        shareMessageHeading.innerHTML = "Welcome Back, Check Your Progress";
    }
    */

    // populate reference field
    var refCodeField = document.getElementById('uniqueURL');
    refCodeField.value = yellowBirdURL +"?ref="+ info.refCode;

    var refCodeField = document.getElementById('uniqueURL');
    refCodeField.value = yellowBirdURL +"?ref="+ info.refCode;
    $("#uniqueURL").attr("style", "z-index: 99; width: 90%; display: none;");
    $("#uniqueURLLoading").hide();
    $("#uniqueURL").fadeIn();

    var shareText = "YellowBird is making financial education mobile and fun. Reserve your spot... " +  yellowBirdURL + "?ref=" + info.refCode;
    // populate Twitter share href
    var twitterBtn = document.getElementById('share_twitter');
    twitterBtn.onclick = function(){
        window.open('https://twitter.com/intent/tweet?url=' + yellowBirdURL + '?ref=' + info.refCode +';text=' + encodeURIComponent(shareText) + '&amp;via=getyellowbird', '_blank', 'width=550,height=500');
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
        // brings up default mail client
        document.location.href = "mailto:?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(shareText);
    }

    // populate the number of friends who have joined using the supplied reference code
    var totalReferences = 0;
    if(info.refCount != null && info.refCount != undefined){
        totalReferences = info.refCount;
    }
    var joinedCount = document.getElementById('joined_count');
    //joinedCount.text = totalReferences;
}