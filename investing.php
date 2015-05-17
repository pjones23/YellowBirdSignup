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
<title>YellowBird | What Can Investing Do For You?</title>
</head>
    
<body class="light--green"> 
    
<!-- How It Works Modal
----------------------------------------------------> 
        
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
              
<!-- End Header
----------------------------------------------------> 
              
<!-- Main Content
----------------------------------------------------> 
<div class="main-container">
    
<!--<a href="index.php" class="go-back"><img src="images/ylwb_back-arrow.svg"></a>-->
    
<!--
<section class="main-question">
    <h1>What Can Investing Do For You?</h1>
    <a href="home.html" class="go-back"><img src="images/ylwb_back-arrow.svg"></a>
</section>   
-->
    
<section class="interaction-container">    

    <article class="first-container">
    
        <aside>
        
            <div class="circle">1</div>
        
            <h2>Do You Shop?</h2>
        
            <p>Where was the last placed you purchased something worth more than $50?</p></aside>
        
        <form>
            
            <input type="text" class="store" placeholder="Chipotle, Nike Air Maxes">
            
            <!--  <button type="submit" class="short rounded light--yellow">Go</button>-->
            
        </form>
        
<!--
        <p>
            <a href="#" class="tooltip" title="This is my link's tooltip message!">Need Help?</a></p>
-->
        
    </article>
    
    
    <article class="iphone-container clearfix">
        
        <img src="images/iphone-stock.png" style="width:250px; height: auto" class="center">
        
        <div id="#" class="iphone-shell">
            
            <!----- Stock Information ---->
            <div class="stock-info">
            <div id="#" class="symbol">Symbol</div>
            <div id="#" class="price">Price
                <div id="#" class="price-change">Change</div>
            </div>
            </div> 
               
            <!----- Value Information ---->
            
            <div class="value-info">
              
            <!----- Duration ---->    
                
            <ul id="duration">
                <a href="#"><li id="#" class="active">1d</li></a>
                <a href="#"><li id="#">1m</li></a>
                <a href="#"><li id="#">1y</li></a>
                <a href="#"><li id="#">Max</li></a>
            </ul>     
                
                <ul>
                    <li>Initial Investment<span id="initial" class="info">$50</span></li>
                    <li>Your New Value<span id="new" class="info">$200</span></li>
                    <li>% Growth<span id="growth" class="info">300%</span></li>
                </ul>
            </div>
        </div>
        
        <div class="notes_right">Stock Symbol</div>
        <div class="notes_left--price">Stock Price</div>
        <div class="notes_left--chart">Line Chart</div>
        <div class="notes_left--time">Time Range
            <p>Adjust the time range to see how your investment changes over time.</p></div>
        
    </article>
    
</section>
    <section class="cta-container center">
        <h2>How Much Is It Worth?</h2>
        <p>See how we give you the FREE tools necessary to becoming a great investor. Then Sign Up for Early Access! </p>
<!--        <a><button class="button rounded left dark-grey md-trigger" data-modal="modal-12">How The App Works</button></a>-->
        <button class="button rounded center dark-grey md-trigger" data-modal="modal-1">Sign Me Up!</button>
    </section>
              
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
    
<!-- Footer
---------------------------------------------------->   
    
    
<!-- End Footer
---------------------------------------------------->   
                
        <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <script>
            $('a').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 500); // determines the speed of the scroll
            return false;
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
    </body>  
    </html>