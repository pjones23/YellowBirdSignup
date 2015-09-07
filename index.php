<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="finance, money, investing, personal, growth, stocks, savings, budgeting, budget, planning, learning, education, school, mobile, app, platform" />
    <meta name="description" content="YellowBird is a mobile financial education platform that makes the learning part fun and easy." />
    <meta name="author" content="YellowBird" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/global.css" rel="stylesheet" type="text/css" />

    <!--- Title --->
    <title>YellowBird | Financial Education Made Fun</title>
</head>

<body>

<?php
include_once("header.php");
?>

<!-- Main Content -------------------------------->

<section class="main-container group">

    <article class="headline-main center">

        <!-- Main Title -->
        <div class="logo-big"><img src="images/wordmark.png"></div>

        <h3>Financial education made fun.</h3>

    </article>

    <!-- Main iPhone Image -->
    <article class="iphone-image__main">

        <img src="images/iphone-two.png">

    </article>

    <!-- Main Information Section -->
    <article class="about-main">

        <aside class="">

            <div class="">

                <p>A mobile-specific, gamified platform that educates users about personal finance and investing.</p>

            </div>

            <!-- Main Button Section ----->
            <div>

                <button class="desktop dark call-to-action md-trigger" data-modal="modal-1">Get Early Access</button>

                <a href="how-it-works.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>"><button class="light-blue">How It Works</button></a>



            </div>

        </aside>

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

</body>

</html>