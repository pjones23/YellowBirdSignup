<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="finance, money, investing, personal, growth, stocks, savings, budgeting, budget, planning, learning, education, school, mobile, app, platform" />
    <meta name="description" content="YellowBird is a mobile financial education platform that makes the learning part fun and easy." />
    <meta name="author" content="YellowBird" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/global.css" rel="stylesheet" type="text/css" />
    <meta property="og:image" content="http://yellowbird.io/images/symbol.png" />

    <!--- Title --->
    <title>YellowBird | Refer Your Friends</title>
</head>

<body>

<?php
include_once("header.php");
?>

<section class="main-container group">

    <article class="headline-main__refer center">

        <!-- Main Title -->
        <h1>Welcome</h1>

        <h4>To the YellowBird Family!</h4>

    </article>

    <!-- Main iPhone Image -->
    <article class="iphone-image__single">

        <img src="images/iphone-single.png">

    </article>

    <!-- Main Information Section -->
    <article class="about-main">
        
            <h2>1 | How This Works</h2>
        
            <p>We will release the app in batches. So invite your friends and jump the line.
The more friends sign up, the faster you'll get in.</p>
        
            <article class="spot-container">
        
                <!-- People in front of you -->
                <aside class="people-front">
                
                    <h5 class="green">234</h5>
                    <p>Your Spot</p>
                    
                </aside>
                
                <!-- People in line behind you -->
                <aside class="people-behind">
                
                    <h5 class="grey">0</h5>
                    <p>Behind You</p>

                </aside>
                
            </article>
            
        
             <!-- Start sharing with your friends -->
            <h2>2 | Now, Start Sharing!</h2>
            
            <p>Below is your unique url code. You can click and copy it or share via social media and/or email!</p>
            
            <!-- The unique URL -->
            <img id="uniqueURLLoading" src="images/loading.gif" />
            <input id="uniqueURL" style="z-index: 99; display: none" placeholder="yellowbird.io/?ref=" disabled type="text">

            <ul class="social-media-links">

                <a id="share_twitter"><li class="twitter"><img src="images/twitter.png"></li></a>
                <a id="share_facebook"><li class="facebook"><img src="images/facebook.png"></li></a>
                <a id="share_email"><li class="email"><img src="images/email.png"></li></a>

            </ul>

        </article>
    </section>


<!-- Footer
---------------------------------------------->
<?php
include_once("footer.php");
?>

<!-- Script -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>

<!--- Typekit --->
<script src="//use.typekit.net/ykc6jnz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<script id="configScript"></script>
<script src="js/loadConfig.js"></script>
<script src="js/addSubscriber.js"></script>
<script src="js/YB.js"></script>

<script src="js/modalEffects.js"></script>
<script src="js/retina.js"></script>
<script src="js/classie.js"></script>
<script src="js/modernizr.custom.js"></script>

<script>
    $(document).ready(function() {
        $("#referralBtn").prop("disabled",true);

        var email = "<?php if (isset($_POST["email"])) { echo($_POST["email"]); } ?>";
        var ref = "<?php if (isset($_POST["ref"])) { echo($_POST["ref"]); } ?>";

        console.log(email);
        console.log(ref);
        $(window).load(function() {
            // this code will run after all other $(document).ready() scripts
            // have completely finished, AND all page elements are fully loaded.
            signup(email, ref);
        });
    });
</script>

</body>

</html>