<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="fantasy football, stock market, investing, trading, stocks, market, sports, education, learning" />
<meta name="author" content="YellowBird" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/tooltipster.css" />  
<link href="fonts/ss-social-regular.css" rel="stylesheet" type="text/css"/>
<meta property="og:image" content="http://yellowbird.io/images/symbol.png" />
<link href="fonts/ss-social-regular.css" rel="stylesheet" type="text/css"/>
<meta property="og:image" content="http://yellowbird.io/images/symbol.png" />
<title>YellowBird | Gamified Investor Education</title>
</head>
    
<body>    
<!-- Header
---------------------------------------------------->  
    
<header>
    <a href="/"><button class="go-back">Go Back</button></a>
</header>
    <section class="thanks-container"><h1 id="signup_heading"></h1> </section>
    <section class="main-container">
        <article class="iphone-learning-container"><img src="images/iphone-stock.png" class="center" alt="image of YellowBird's education app"></article>
        <article class="refer-container">
            <h3>Invest In Your Friends Too</h3>
            <h1>Invite Your Friends to <br>Gain Early Access &amp; Exclusive Benefits!</h1>
<p>Share your unique url via twitter, facebook, and/or email. Earn benefits for each friend who signs up!</p>
            <input id="uniqueURL" placeholder="your unique url" disabled type="text" >
            <ul class="social-media-links">

                <a id="share_twitter"><li class="circle twitter"><img src="images/twitter.png"></li></a>
                <a id="share_facebook"><li class="circle facebook"><img src="images/facebook.png"></li></a>
                <a id="share_email"><li class="circle email"><img src="images/email.png"></li></a>

            </ul>
        </article>
    </section>
    <section class="how-it-works-container">
        <aside>
            <h1>How This Works</h1>
            <h3>The more of your friends that sign up, the more benefits you get.</h3>
        </aside>    
        <article class="tracker-container">
            <table>
                <tr>
                    <td><h4 style="font-weight:normal">Friends Joined</h4>YellowBird Benefit</td>
                    <td class="border-cell"><h4>3</h4>Round 2 Access</td>
                    <td class="border-cell"><h4>10</h4>Round 1 Access</td>
                    <td class="border-cell"><h4>25</h4>Round 1 Access, 500 Pts.</td>
                    <td class="border-cell"><h4>50</h4>Round 1 Access, 500 Pts. &amp; a YellowBird Tee</td>
                </tr>
            </table>
            <p><span id="joined"><a id="joined_count"></a></span> friends have joined &nbsp;&nbsp;|&nbsp;&nbsp; <a href="#" class="tooltip" title="Points are the digital dollars you will use when you start trading on the YellowBird Stock Simulator. They're pretty important!">What are these points about?</a></p>
        </article>
    </section>
    
    
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
<!-- End Footer
---------------------------------------------------->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/bmq6jcj.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="js/retina.js"></script>

    <script id="configScript"></script>
    <script src="js/loadConfig.js"></script>
    <script src="js/addSubscriber.js"></script>
    <script src="js/YB.js"></script>

    <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
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
