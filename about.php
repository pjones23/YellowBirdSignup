<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="fantasy, stock market, investing, trading, stocks, market, sports, education, learning, finance, millenials, investment, learning " />
<meta name="description" content="Slide and push menus that are initially hidden off screen, and transition into view with CSS transitions." />    
<meta name="author" content="YellowBird" />  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/tooltipster.css" />  
<link href="fonts/ss-social-regular.css" rel="stylesheet" type="text/css"/>
<meta property="og:image" content="http://yellowbird.io/images/symbol.png" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
<script type="text/javascript" src="js/jquery.tooltipster.min.js"></script> 
    
<!--- Typekit --->
<script src="//use.typekit.net/ykc6jnz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!--- Title --->    
<title>YellowBird | About Us</title>
</head>
    
    
<body class="yellow--light"> 
    
<!-- How It Works Modal
----------------------------------------------------> 
        
<!-- Header
---------------------------------------------------->  
    
<header>
    
    <nav>
            
            <a href="index.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>"><div class="header-logo"></div></a>
        
        <ul>
            
            <a href="#"><li class="call-to-action md-trigger" data-modal="modal-1">Early Access</li></a>
            <a href="http://www.medium.com/@yellowbird"><li>Blog</li></a>
            <a href="about.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>"><li>About</li></a>
            
        </ul>    
        
<!--
        <ul class="social-nav">
            
            <a href="http://www.facebook.com/yellowbirdapp"><li><img src="images/social_facebook.svg" class="social-nav__link"></li></a>
            
            <a href="https://www.twitter.com/getyellowbird"><li><img src="images/social_twitter.svg" class="social-nav__link"></li></a>
            
        </ul>
-->
            
    </nav>
    
</header>
    
<!-- Content
---------------------------------------------------->   
      
<!-- Main Content
---------------------------------------------------->
        
        <section class="masthead">
        </section>
    
        <section class="main-container__about">
            
                <h1>At YellowBird</h1>
            
                <h4>We are rethinking the way financial education works. We don’t teach from a classroom, we don’t show long videos or write 500-page books to read. Instead, we are a mobile-specific, interactive solution.</h4>
            
            <div>
                
                <div class="right press-kit">
            
                    <img src="images/zip.png">

                    <a href="YellowBird%20Press%20Kit.zip" class="dl-button">Download Press Kit</a>
                
                </div>
                
                <h2>What is YellowBird</h2>
            
                <h4>YellowBird is a mobile-specific solution to a growing problem of under-served millennials who do not invest in the stock market nor have the financial literacy to make responsible financial decisions. We offer both, free and premium versions to consumers as well as provide a trusted bridge connecting educated consumers with financial institutions who seek to build new client relationships.</h4>
                
            </div>   
            
            <div>
            
            <h2>Get in Contact With Us</h2>
                
            <ul class="social-media-links">
                
                <a href="http://twitter.com/getyellowbird"><li class="circle-social twitter"><img src="images/twitter.png"></li></a>
                
                <a href="http://facebook.com/yellowbirdapp"><li class="circle-social facebook"><img src="images/facebook.png"></li>
                
                <a href="mailto:info@yellowbird.io"><li class="circle-social email"><img src="images/email.png"></li>
            
            </ul>
                    
                </ul>
                
            </div>
               
        </section>
    
<!--
        <div class="main-container">
    
            <div class="header-container--third">
            
                <img src="images/graduate.png">
                
                <a href="#" class="dl-button">Download Press Kit</a>
                
            </div>
            
            <div class="header-container--third">
            
                <img src="images/graduate.png">
                
                <a href="#" class="dl-button">Download Press Kit</a>
                
            </div>
            
            <div class="header-container--third">
            
                <img src="images/graduate.png">
                
                <a href="#" class="dl-button">Download Press Kit</a>
                
            </div>
    
        </div>
-->

<!-- Sign Up Modal
---------------------------------------------------->  
    
<div class="md-modal md-effect-1" id="modal-1"> 
    
<!-- Sign up -->
    
    <div class="md-content">
        
        <div class="modal-title">
                
            <button class="md-close"><img src="images/icon_close-02.svg"></button>
        
        </div> 
        
        <h1>Early Access</h1>
        
        <p>Sign up for early access to the YellowBird platform.<p>

        <form action="refer-a-friend.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>" method="post">

            <input id="email" name="email" type="email" class="transparent" placeholder="Trade Your Email" required>
            <input id="ref" name="ref" type="hidden" value="<?php if (isset($_GET["ref"])) { echo($_GET["ref"]); } ?>">
            <button id="submit" class="button_green--long">Go</button>
        </form>
             
	</div>
    
</div>   
    
<div class="md-modal-full md-effect-12" id="modal-12">
			
            <div>
                
				<button class="md-close">×</button>
           
            </div>
		
        </div>
    
<div class="md-overlay"></div>
    
<!-- End Modal
---------------------------------------------------->    

    
       
<!-- Footer --------------------------------------->   
    
     <footer>
            
            <div class="copyright">
                <p>© 2015 YellowBird Financial, Inc. Homegrown in Atlanta.</p>  
            </div>

        </footer>

<!-- End Footer
----------------------------------------------------> 
            
        <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
        <script src="js/retina.js"></script>
       <!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
</body>