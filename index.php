<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="fantasy football, stock market, investing, trading, stocks, market, sports, education, learning" />
<meta name="author" content="YellowBird" />
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link href="coming.css" rel="stylesheet" type="text/css" />
<link href="fonts/ss-standard.css" rel="stylesheet" />
<link href="fonts/ss-social-regular.css" rel="stylesheet" type="text/css"/>
<meta property="og:image"content="http://yellowbird.io/images/symbol.png" />
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/bmq6jcj.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<title>YellowBird | Gamified Investor Education</title>
</head>
    
    <body class="cbp-spmenu-push">
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    

<!-- Header
---------------------------------------------------->      
        
      <header>
            <a href="index.html"><img src="images/wordmark.png" class="logo_wordmark desktop" alt="yellowBird logo"></a>
            <a href="index.html"><img src="images/symbol.png" class="logo_symbol mobile" alt="yellowBird logo"></a>
<!--
            <nav class="site-nav desktop">
                <a class="nav-link" href="mission.html">Mission</a>
                <a class="nav-link" href="about.html">Team</a>
                <a class="nav-link" href="https://medium.com/@yellowbird">Blog</a>
                <a class="nav-link" href="contact.html">Contact</a>
            </nav>
-->
            
            <nav class="mobile-nav">
            <a href="#sign-up">
            <div class="signup-btn"><h4>Get Early Access</h4></div>
            </a>
            <div>  
            <button id="showRightPush" class="mobile"></button></div>
            </nav>
          </header>
          
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                <div class="push_close"><a href="#"><img src="images/push_close.svg"></a></div>
                <a href="about.html"><h4>About Us</h4></a>
                <a href="https://medium.com/@YellowBird"><h4>Our Blog</h4></a>
<!--
                <a href="initiative.html"><h4>Dividend Program</h4></a>
                <a href="jobs.html"><h4>Jobs</h4></a>

                <a href="terms.html"><h4>Terms of Service</h4></a>-->
                <a href="terms.html"><h4>Legal</h4></a>
                <a href="contact.html"><h4>Contact Us</h4></a>
                <ul>
                    <li><a href="https://www.twitter.com/getyellowbird"><img src="images/twitter.png" class="twitter-small"></a></li>
                    <li><a href="http://www.facebook.com/yellowbirdapp"><img src="images/facebook.png" class="facebook-small"></a></li>
                    <li><a href="mailto:info@yellowbird.io"><img src="images/email.png" class="email-small"></a></li>
                </ul>
               
        </nav>
 
<!-- How It Works Modal
----------------------------------------------------> 
        
<aside class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
    <div id="close"><img src="images/black_close.svg"></div>
    <h3>The more you learn, the more trading features you unlock. More features lead to a better performance in duel simulator.</h3>
    <img class="how-it-works" src="images/how-it-works.png">
</aside>  

<!-- Main Content
----------------------------------------------------> 
        
        <section class="overview main">
        <div>
            <img src="images/ingredients.png" class="ingredients">
            <b>A new approach to investment education.</b>
            <h3>1 part learning, 1 part trading. All parts fun. All parts free!</h3>
                <a><button id="showTop">
                    <h4>How It Works</h4>
                </button></a>
        </div>    
        </section> 
        
<!-- How It Works (Mobile)
---------------------------------------------------->  
        
        <section class="container-mobile">
            <h2>How It Works</h2>
            <h3>The more you learn, the more trading features you unlock. More features lead to a better performance in duel simulator.</h3>
            <img class="how-it-works-mobile" src="images/How-It-Works-Mobile.png">
<!--
            <div class="learning"></div>
            <div class="playing"></div>
-->
        </section>
        
<!-- Sign Up Modal
----------------------------------------------------> 

		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
            
				<h3>Share</h3>
				<div>
                    <h2>You are currently in round <strong>1</strong>&nbsp;.</h2>
				    <p>Want to move up to the first round for early access? Be sure to share your unique url with family and friends.</p>
					<input id="uniqueURL" placeholder="your unique url" disabled />
                        <ul>
                            <a id="share_twitter"><li><button><img src="images/twitter.png" class="share twitter"></button></li></a>

                            <a id="share_facebook"><li><button><img src="images/facebook.png" class="share facebook"></button></li></a>
                            
                            <a id="share_email"><li><button><img src="images/email.png" class="share email"></button></li></a>
                        </ul>
                        <div>
                            <button class="md-close">×</button>
                        </div>    
			     </div>
		  </div>
        </div>

<!-- Sign Up
---------------------------------------------------->  
        
        <section id="sign-up">
            <p>Want to be in the first draft class?</p>

            <form onsubmit="event.preventDefault(); signup(<?php if (isset($_GET["ref"])) { echo("'".$_GET["ref"]."'"); } ?>);">
            <input type="email" id="email" class="transparent big" placeholder="Trade Your Email" required/>
                <button id="submit">JOIN</button>
                <button id="hiddenSubmit" class="md-trigger" data-modal="modal-1" style="display: none;"></button>
            </form>
            <div class="main clearfix">
			</div>
		<div class="md-overlay"></div>
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
                <p>© 2014 YellowBird Financial, Inc. Homegrown in Atlanta.</p>  
            </div>

        </footer>
       
<!-- Footer ---------------------------------------------> 
                
        <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
                menuTop = document.getElementById( 'cbp-spmenu-s3' ),
				showRightPush = document.getElementById( 'showRightPush' ),
                showTop = document.getElementById( 'showTop' ),                   closeTop = document.getElementById('close'),
				body = document.body;

			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};
            showTop.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( menuTop, 'cbp-spmenu-open' );
                disableOther( 'showTop' );
            };
            
            closeTop.onclick = function() {
                classie.toggle( this, 'active' );
                classie.toggle( menuTop, 'cbp-spmenu-open' );
                disableOther( 'showTop' );
            };

			function disableOther( button ) {
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
                if( button !== 'showTop' ) {
                    classie.toggle( showTop, 'disabled' );
                }
			}
		</script>
        <script>
            $('a').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 500); // determines the speed of the scroll
            return false;
        });		
        </script>
        <script type="text/javascript" src="js/retina.js"></script>
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
        <script id="configScript"></script>
        <script src="js/loadConfig.js"></script>
        <script src="js/addSubscriber.js"></script>
        <script src="js/YB.js"></script>
    </body>
