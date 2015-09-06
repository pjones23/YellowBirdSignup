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
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>

    <!--- Typekit --->
    <script src="//use.typekit.net/ykc6jnz.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!--- Title --->
    <title>YellowBird | Refer Your Friends</title>
</head>

<body>

<?php
include_once("header.php");
?>

<!-- Main Container
---------------------------------------------------->

<!--
    <div class="thanks-container">

        <span>Thanks For Signing Up</span>
        <div class="close"><img src="images/icon_close-white.svg"></div>

    </div>
-->

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

        <p>The more of your friends that sign up, the more benefits you get.</p>


        <!-- Invite list and how it works -->
        <li><span class="light">3</span>  <strong>INVITES</strong> ::
            First group access</li>
        <li><span class="medium">5</span> <strong>INVITES</strong> ::
            Beta group access, something else</li>
        <li><span class="dark">10</span> <strong>INVITES</strong> ::
            Beta group access, exclusive T-shirt.
        </li>
        <br>

        <!-- Start sharing with your friends -->
        <h2>2 | Now, Start Sharing!</h2>

        <p>Below is your unique url code. You can click and copy it or share via social media and/or email!</p>

        <!-- The unique URL -->
        <input type="text" style="z-index: 99;" placeholder="yellowbird.io/?ref=">

        <ul class="social-media-links">

            <li class="twitter"><img src="images/twitter.png"></li>

            <li class="facebook"><img src="images/facebook.png"></li>

            <li class="email"><img src="images/email.png"></li>

        </ul>

    </article>
</section>

<!-- Sign up for early access modal
--------------------------------------------->
<?php
include_once("early-access-modal.php");
?>

<!-- Footer
---------------------------------------------->
<?php
include_once("footer.php");
?>

<!-- Script -->
<script src="js/modalEffects.js"></script>
<script src="js/retina.js"></script>
<script src="js/classie.js"></script>
<script src="js/modernizr.custom.js"></script>

</body>

</html>