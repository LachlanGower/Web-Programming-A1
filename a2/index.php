<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
	  
	<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <script src='../wireframe.js'></script>
	  
    <script></script>
	<script src="js/test.js"></script>
    <!-- All Images sourced from Jaycar.com.au or iconfinder. they have been embedded and I have not affiliation with Jaycar or iconfinder artists, these images are used for educational purposes only--> 
  </head>

  <body>
    
    <div id="headerbanner">
        <header>
            <img src="https://www.jaycar.com.au/medias/sys_master/images/hc1/h46/8872834138142/jaycar-logo-original.png"/>
        </header>
        <nav>
            <a class = "button" href = "products.php">
                Browse Products
            </a>
            <a class = "button" href = "login.php">
                Login
            </a>
        </nav>
    </div>
    <main class = "container">
            <article class = "carousel">
                <div class = "carousel_arrow" onclick = "carouselArrow(-1)">
                    &lt;
                </div>
                    <section class = "carousel_slide">
                        <div class= "slide_item slide_in">
							Catalogue <br>Sept 18
						</div>
                        <div class= "slide_item slide_in">
							Catalogue <br>Arduino Project Special Edition
                    	</div>
                        <div class= "slide_item slide_in">
							Clearance Catalogue <br>Sept 18
                    	</div>
                    </section>
                    <section class = "carousel_slide">
                        <div class= "slide_item slide_in">
							Catalogue <br>Oct 18<br>
							COMING SOON!
                    	</div>
                        <div class= "slide_item slide_in">
							Catalogue <br>Nov 18<br>
							COMING SOON!
                        
                    	</div>
                        <div class= "slide_item slide_in">
							Catalogue <br>Dec 18<br>
							COMING SOON!
						</div>
                    </section>
                    <section class = "carousel_slide">
                        <div class= "slide_item slide_in">
                        	Catalogue <br>Aug 18
                    	</div>
                        <div class= "slide_item slide_in">
							Catalogue <br>Jul 18
                    	</div>
                        <div class= "slide_item slide_in">
							Catalogue <br>Jun 18
                    	</div>
                    </section>
                <div id = "right" class = "carousel_arrow" onclick = "carouselArrow(1)">
                    &gt;
                </div>
            </article>
		
			<!--Social Media-->
            <article class = "social_Media">
                <div>
                    <a href = "https://www.facebook.com">
                        <img src ="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-512.png"/>
                    </a>
                    <a href = "https://twitter.com">
                        <img src ="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-twitter-512.png"/>
                    </a>
                    <a href = "https://instagram.com">
                        <img src ="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-512.png"/>
                    </a>
                    <a href = "https://youtube.com">
                        <img src ="https://cdn1.iconfinder.com/data/icons/logotypes/32/youtube-512.png"/>
                    </a>
                </div>
            </article>
		
			<!--About Us Dynamic Scroller-->
            <article id = "info_scroller">
                <section>
                    <div class = "index_scroll">
                        <p>
                            <span>What We Stand For</span><br><br>
                            We stand for integrity and really good customer service <wbr>
                            We have amazing return policies just show your reciept<wbr> and your item and we can return it provided it hasnt <wbr>been used extensively or broken after the first 2 weeks. <wbr>We also match prices and allow for online ordering<wbr> sercives (down)  If you have any issues please contact <wbr>customer services 
                            <a href ="https://google.com" target= "_blank">here</a>
                        </p>
                    </div>
                    <div class = "index_scroll">
                        <p>
                            <span>What We Provide</span>
                            <br>
                            <br>
                            We provide quality Electronics for<wbr> Professionals, Students and Hobbyists<wbr>
                            We have something for everyone from <wbr> Security to the nitty gritty.
                            <br>
                            <br>
                            <em>Service Hours:</em><br>
                            Mon - Thu: 08:30AM - 05:30PM<br>
                            Fri: 8:30AM - 5:30PM<br>
                            Sat: 8:30AM - 5:00PM<br>
                            Sun: 10:00AM - 04:00PM<br>
                            
                            
                        </p>
                    </div>
                    <div class = "index_scroll">
                        <p>
                            <span>How You Can Impact Us</span>
                            <br>
                            <br>
                            Join Our Community <a href = "login.php">here!</a>
                            <br>
                            <br>
                            Contact Us and tell us your thoughts!
                            <br>
                            <br>
                            Phone Number: 02 1234 5678<br>
                            Customer Service: Coming Soon!<br>
                        </p>
                    </div>
                </section>
        </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Lachlan Gower, S3723825</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button 	id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <script src="js/main.js"></script>
  </body>
</html>