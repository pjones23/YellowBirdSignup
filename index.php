<!doctype html>
<html ng-app="YellowBird">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="fantasy, stock market, investing, trading, stocks, market, sports, education, learning, finance, millenials, investment, learning " />
    <meta name="description" content="Slide and push menus that are initially hidden off screen, and transition into view with CSS transitions." />
    <meta name="author" content="YellowBird" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <link href="css/component.css" rel="stylesheet" type="text/css" />
    -->
    <link href="css/global.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/tooltipster.css" />
    <link href="fonts/ss-social-regular.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
    <meta property="og:image" content="http://yellowbird.io/images/symbol.png" />
    <title>YellowBird | Gamified Investor Education</title>
</head>

<body>

<!-- How It Works Modal
---------------------------------------------------->

<!-- Header
---------------------------------------------------->
<div id="container">
    <header>
        <nav>
            <a href="index.html"><img src="images/wordmark.png" class="logo_wordmark desktop" alt="yellowBird logo"></a>
            <button class="button rounded right md-trigger" data-modal="modal-1">Get Early Access</button>
        </nav>

        <!-- End Header
        ---------------------------------------------------->

        <!-- Main Content
        ---------------------------------------------------->
        <div class="main-container">
            <section class="main-question">
                <h1>What Can Investing Do For You?</h1>
            </section>
            <section class="interaction-container clearfix">
                <article class="first-container">
                    <aside>
                        <div class="circle">1</div>
                        <h2>What’s It Worth?</h2>
                        <p>What can investing do for you? Let’s find out.<br> What was the last thing you purchased worth more than $50 USD?</p></aside>
                    <form onsubmit="event.preventDefault();">
                        <input id="companyText" type="text" placeholder="Chipotle, Nike Air Maxes">
                        <button type="submit" class="short rounded green" onclick="productLookup()">Go</button>
                    </form>
                    <p><a href="#" class="tooltip" title="This is my link's tooltip message!">Need Help?</a></p>
                </article>


                <article class="iphone-container clearfix">
                    <img src="images/iphone-stock.png" class="center">
                    <div id="#" class="iphone-shell">

                        <!----- Stock Information ---->
                        <div class="stock-info">
                            <div id="symbol" class="symbol">Symbol</div>
                            <div id="price" class="price">Price
                                <div id="change" class="price-change">Change</div>
                            </div>
                            <div><img id="chart" width="100%"/></div>

                            <!----- Duration ---->
                            <ul id="duration">
                                <a href="#"><li id="#">1d</li></a>
                                <a href="#"><li id="#" class="active">1w</li></a>
                                <a href="#"><li id="#">1m</li></a>
                                <a href="#"><li id="#">1y</li></a>
                                <a href="#"><li id="#">2y</li></a>
                                <a href="#"><li id="#">4y</li></a>
                            </ul>
                        </div>

                        <!----- Value Information ---->
                        <div class="value-info">
                            <ul>
                                <li>Initial Investment<span id="initial" class="info">$50</span></li>
                                <li>Your New Value<span id="new" class="info">$200</span></li>
                                <li>Year % Growth<span id="growth" class="info">300</span></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="second-container right">
                    <aside>
                        <div class="circle">2</div>
                        <h2>Adjust The Time Frame</h2>
                        <p>See what that investment does over different periods of time.</p></aside></article>

            </section>
            <section class="cta-container clearfix center">
                <div class="circle center">3</div>
                <h2>Want To Learn How?</h2>
                <p>See how we give you the tools necessary to becoming a great investor. Then Sign Up for Early Access! </p>
                <a><button class="button rounded left dark-grey md-trigger" data-modal="modal-12">How The App Works</button></a>
                <button class="button rounded right green md-trigger" data-modal="modal-1">I Want Early Access</button>
            </section>

            <!-- End Main Content
            ---------------------------------------------------->

            <!-- Modals
            ---------------------------------------------------->

            <div class="md-modal md-effect-1" id="modal-1"> <!-- Sign up -->
                <div class="md-content">
                    <h1>Early Access</h1>
                    <p>Sign up for early access to the YellowBird platform.                   <p>
                    <form action="refer-a-friend.php" method="post">
                        <input id="email" name="email" type="email" class="transparent big" placeholder="Trade Your Email" required>
                        <input id="ref" name="ref" type="hidden" value="<?php if (isset($_GET["ref"])) { echo($_GET["ref"]); } ?>">
                        <button id="submit" class="short rounded right green">Go</button></form>
                    <div>
                        <button class="md-close">×</button>
                    </div>
                </div>
            </div>

            <div class="md-modal-full md-effect-12" id="modal-12">
                <article class="how-it-works">
                    <aside class="#"><img src="images/gamified.png" class="features"><h3>The Gamified Method</h3><p>A curriculum that includes a variety of question & answer challenges and interactive methods...</p></aside>
                    <aside class="#"><img src="images/gamified.png" class="features"><h3>Ditch The Traditional</h3><p>No more overcrowded classrooms, mountains of books, and hour-long videos.</p></aside>
                    <aside class="#"><img src="images/gamified.png" class="features">
                        <h3>Your Own Pace</h3><p>Learn at your own pace and whereever you are: the bed, the bus, walking to class, a Chipotle line.</p></aside>
                </article>
                <div>
                    <button class="md-close">×</button>
                </div>
            </div>

            <div class="md-overlay"></div>

            <!-- End Modal
            ---------------------------------------------------->

            <!-- Footer
            ---------------------------------------------------->

            <footer>
                <!--
                            <div class="footer_text">
                                <ul>
                                    <li><a href="jobs.html">Work</a></li>
                                    <li><a href="about.html">Team</a></li>
                                    <li><a href="http://www.medium.com/yellowbird">Blog</a></li>
                                    <li><a href="privacy.html">Privacy</a></li>
                                    <li><a href="terms.html">Terms</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                -->

                <div class="copyright">
                    <p>© 2015 YellowBird Financial, Inc. Homegrown in Atlanta.</p>
                </div>

            </footer>
        </div>
</div>
<!-- End Footer
---------------------------------------------------->

<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/bmq6jcj.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script
<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script src="js/classie.js"></script>
<script src="js/modernizr.custom.js"></script>

<script>
    var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
        menuTop = document.getElementById( 'cbp-spmenu-s3' ),
        body = document.body;
    $("#companyDialog").dialog({
        autoOpen: false
    });

    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500); // determines the speed of the scroll
        return false;
    });

    // Add autocomplete functionality

    $(function() {

        $('#companyText').autocomplete({
            source: "companyLookup.php",
            minLength: 2,
            select: function( event, ui ) {
                productLookup();
            },
            search: function( event, ui ){
                console.log("Attempted Search");
            }

        });
    });

</script>
<!-- classie.js by @desandro: https://github.com/desandro/classie -->
<script src="js/modalEffects.js"></script>

<!-- for the blur effect -->
<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<script>
    // this is important for IEs
    var polyfilter_scriptpath = '/js/';
</script>
<script src="js/retina.js"></script>
<script src="js/cssParser.js"></script>
<script src="js/css-filters-polyfill.js"></script>
<script>
    $(document).ready(function() {
        $('.tooltip').tooltipster();
    });
</script>

<script src="js/quote.js"></script>

</body>
</html>