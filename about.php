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
    
<!-- Content
---------------------------------------------------->   
      
<!-- Main Content
---------------------------------------------------->
        
        <section class="masthead">
        </section>
    
        <section class="main-container__about">
            
                <h1>At YellowBird</h1>
            
                <h3>We are rethinking the way stock market education works. We don’t teach from a classroom, we don’t show long videos or write 500-page books to read. Instead, we are a mobile-only, gamified solution.</h3>
            
        </section>    
        
    
    
    
            
<!-- Our History -------------------------------------->
            
        <section class="main-container__about">

                <h1>Why The Name?</h1>
            
                <h3>We wanted something that is light and approachable. To break against the normalcy of solid and very strutted platforms. The previous notions can come off as intimidating. Our aim is to be welcoming. The bird represents the financial freedom one could have once investing began. Yellow is a good color for early learning. Although some can perceive this is a cowardly color, in this context, it is warming and peaceful. It is the color of the mind and the intellect. It is optimistic and cheerful. </h3>
            
        </section>  
    
    
    
    
       
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
		<script>
			var menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showRightPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toleft' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRightPush' );
			};

			function disableOther( button ) {
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
        <script>
            $('a').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top
            }, 2500); // determines the speed of the scroll
            return false;
        });		
        </script>
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