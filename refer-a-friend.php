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

<!--- Title --->    
<title>YellowBird | Refer A Friend!</title>
</head>

    
<body>
    
<!-- Header
---------------------------------------------------->  
    
<header>
    
    <nav>
        <ul>
            <a href="index.php"><div class="header-logo"></div></a>
            <a href="about.php"><li>About</li></a>
            <a href="http://www.medium.com/@yellowbird"><li>Blog</li></a>
            
        </ul>    
        
        <ul class="social-nav">
            
            <a href="http://www.facebook.com/yellowbirdapp"><li><img src="images/social_facebook.svg" class="social-nav__link"></li></a>
            
            <a href="https://www.twitter.com/getyellowbird"><li><img src="images/social_twitter.svg" class="social-nav__link"></li></a>
            
        </ul>
        
        <div class="menu-icon" style="display:none;"><a href="#"><img src="images/menu_icon.svg"></a></div>
            
    </nav>
    
</header>
    
<!-- Main Container
---------------------------------------------------->  
    
    <div class="thanks-container">
        
        <span id="signup_heading">Thanks For Signing Up</span>
        <div class="close"><img src="images/icon_close-white.svg"></div>
    
    </div>
    
    <section class="main-container">
        <article class="iphone-learning-container"><img src="images/refer-phones.png" class="center-big" alt="image of YellowBird's education app"></article>
        
        <article class="refer-container">
            
            <h3>Invest In Your Friends Too</h3>
            
            <h1>Invite Your Friends to <br>Gain Early Access &amp; Exclusive Benefits!</h1>
            
            <p>Share your unique url via twitter, facebook, and/or email. Earn benefits for each friend who signs up!</p>
            
            <input id="uniqueURL" style="z-index: 99;" placeholder="your unique url" disabled type="text" >

            <ul class="social-media-links">

                <a id="share_twitter"><li class="circle-social twitter"><img src="images/twitter.png"></li></a>
                <a id="share_facebook"><li class="circle-social facebook"><img src="images/facebook.png"></li></a>
                <a id="share_email"><li class="circle-social email"><img src="images/email.png"></li></a>
            
            </ul>
       
        </article>
    
    </section>
    
    
    <section class="how-it-works-container">
        <aside>
            <h1>How This Works</h1>
            <h3>The more of your friends that sign up, the more benefits you get.</h3>
        </aside>    

        <article class="tracker-container">
            
                <div class="progress-bar">
                
                    <div class="progress-bar__blue"></div> 
                    
                    <li class="level">
                        <p><span class="signees">15</span><br>This is some filler text</p>
                    </li>
                    
                    <li class="level">
                        <p><span class="signees">10</span><br>This is some filler text</p>
                    </li>
                    
                    <li class="level">
                        <p><span class="signees">5</span><br>This is some filler text</p>
                    </li>
                    
                </div>
            
                <div class="joined">
                    
                    <p><span id="joined-number"><a id="joined_count">0</a></span> friends have joined so far.</p>
                    
                </div>    

        </article>

    </section>
    
    
<!-- Footer
---------------------------------------------------->   
    
        <footer>
            
            <div class="copyright">
                <p>© 2015 YellowBird Financial, Inc. Homegrown in Atlanta.</p>  
            </div>

        </footer>

<!-- End Footer
---------------------------------------------------->

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
    <!--- Typekit --->
    <script type="text/javascript" src="//use.typekit.net/bmq6jcj.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="js/retina.js"></script>

    <script id="configScript"></script>
    <script src="js/loadConfig.js"></script>
    <script src="js/addSubscriber.js"></script>
    <script src="js/YB.js"></script>
    
    <script>
    $(document).ready(function(){
        /*
      $(".close").click(function(){
        $(".thanks-container").slideToggle("fast");
      });
      */
    });
    </script>
    
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
                $(".close").click(function(){
                    $(".thanks-container").slideToggle("fast");
                });
            });
        });
    </script>
</body>
