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
<title>YellowBird | Gamifying Financial Education</title>
</head>
    
    
<body class="yellow--light"> 
    
<!-- How It Works Modal
----------------------------------------------------> 
        
<!-- Header
---------------------------------------------------->  
    
<header>
    
    <nav>
            
            <a href="index.html"><div class="header-logo"></div></a>
        
        <ul>
            
            <a href="#"><li class="call-to-action md-trigger" data-modal="modal-1">Sign Me Up</li></a>
            <a href="http://www.medium.com/@yellowbird"><li>Blog</li></a>
            <a href="about.html"><li>About</li></a>  
            
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

    <div id="page-container">  
    
        <!-- Left Pane ------------------------> 
        
        <section class="page-content_pane--left">
        
            <div class="header-container">
                <img src="#" class="investing-illus">
                <div class="phone-container_text"><h2>Why Investing Is Good</h2>
                    <p>Want to see what investing can do for you?</p>
                        <div><a href="investing.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>" class="button rounded center dark-grey">Let's Go See</a></div>
                </div>
            </div>
            
        </section>
        
        <!-- Right Pane ------------------------>
        
        <section class="page-content_pane--right pane-background--desk">
        
            <div class="header-container">
                <img src="images/ingredients.png">
                <div class="phone-container_text"><h2>Gamified Financial Education</h2>
                    <p>1 part learning, 1 part trading. All parts fun. All parts FREE!</p>
                        <div><a href="how-it-works.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>" class="button rounded center dark-grey">How It Works?</a></div>
                </div>
            </div>
            
        </section>
        
    </div>
    
    
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
        
            <form onsubmit="event.preventDefault();">
                
                <input type="email" class="transparent" placeholder="Trade Your Email" required>
                <button id="submit" onclick="location.href='refer-a-friend.php<?php if (isset($_GET["ref"])) { echo("?ref=".$_GET["ref"]); } ?>'" class="button_green--long">Go</button>
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
    
<!-- Scripts 
---------------------------------------------------->     

<script src="js/retina.js"></script>  
    
    
</body> 
</html>    