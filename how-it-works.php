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
<title>YellowBird | How It Works?</title>
</head>
    
<body class="light--grey"> 
    
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
              
<!-- End Header
----------------------------------------------------> 
              
<!-- Main Content
----------------------------------------------------> 
<div class="main-container__works">
    
<!--    <a href="index.html" class="go-back--left"><img src="images/ylwb_back-arrow.svg"></a>-->
    
    <div class="header-container--third">
        
            
        <img src="images/works.png" class="img-icon" alt="YellowBird uses interactive templates to provide the best learning experience">
            
        <p class="center-text"><span class="body-subtitle">Learn</span><br>Interactive lessons that build upon each other. A new format, built for mobile.</p>      
        
    </div>    
            
        <div class="header-container--third">
            
        <img src="images/apply.png" class="img-icon" alt="YellowBird uses interactive templates to provide the best learning experience">
        
        <p class="center-text"><span class="body-subtitle">Apply</span><br>Apply all of the things you learn from the lessons in interactive ways. </p>     
            
        </div>
    
        <div class="header-container--third__full">
        
            
        <img src="images/graduate.png" class="img-icon" alt="YellowBird uses interactive templates to provide the best learning experience">
            
        <p class="center-text"><span class="body-subtitle">Graduate</span><br>After you've built your money confidence, make what you've learned a reality.</p>      
        
    </div> 
    
<!--
    </div>
    
<div class="main-container__white">
-->
    
     <section class="cta-container center">
        
        <h2>Mobile. Fun. Free</h2>
        
        <p>See how we give you the FREE tools necessary to becoming a great investor. Then Sign Up for Early Access! </p>
        
<!--        <a><button class="button rounded left dark-grey md-trigger" data-modal="modal-12">How The App Works</button></a>-->
        
        <button class="button rounded center dark-grey md-trigger" data-modal="modal-1">Sign Me Up!</button>
        
    </section>
    
    </div>
              
<!-- End Main Content
---------------------------------------------------->  
   
    
<!-- Sign Up Modal
---------------------------------------------------->  
    
<div class="md-modal md-effect-1" id="modal-1"> 
    
<!-- Sign up -->
    
    <div class="md-content">
        
        <div class="modal-title">
                
            <button class="md-close"><img src="images/icon_close-02.svg"></button>
        
        </div> 
        
        <h1>Early Access</h1>
        
        <p>Sign up for early access to the YellowBird platform.</p>

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
    
    
    
<!-- Footer
---------------------------------------------------->   
    
    
<!-- End Footer
---------------------------------------------------->   
                
        <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
        <script src="js/modernizr.custom.js"></script>
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
    </body>  
    </html>