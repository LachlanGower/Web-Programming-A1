<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
	
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <script src='../wireframe.js'></script>
	  <!-- All Images sourced from Jaycar.com.au or iconfinder. they have been embedded and I have no affiliation with Jaycar or iconfinder artists, these images are used for educational purposes only-->
  </head>

  <body>
    <div id="headerbanner">
		<a href = "index.php">
        	<header>
            	<img src="https://www.jaycar.com.au/medias/sys_master/images/hc1/h46/8872834138142/jaycar-logo-original.png"/>
        	</header>
		</a>
        <nav>
            <a class = "button" href = "products.php">
                Browse Products
            </a>
            <a class = "button" href = "login.php">
                Login
            </a>
        </nav>
    </div>
    <main>
        <div class = "container">
			
			<article class = "header_whitespace">
				New Products
			</article>
            <article class = "carousel">
                <div class = "carousel_arrow" onclick = "carouselArrow(-1)">
                    &lt;
                </div>
                <section class = "carousel_slide">
					<img src = "https://www.jaycar.com.au/medias/sys_master/images/9074358386718/universal-temperature-alarm-kitImageMain-515.jpg">
					<div class = "carousel_products slide_item slide_down">
						<div class = "miniDescriptor">
							<span>Universal Temperature Alarm Kit</span>
					</div>
					</div>
					
                </section>
                <section class = "carousel_slide">
					<img src = "https://www.jaycar.com.au/medias/sys_master/images/9126698844190/duinotech-mini-3d-printerImageMain-515.jpg">
					
					<div class = "slide_item carousel_products slide_down">
						<div class = "miniDescriptor">
							<span>Mini 3D Printer</span>
						</div>
					</div>
                </section>
                <section class = "carousel_slide">
					<img src = "https://www.jaycar.com.au/medias/sys_master/images/9105773428766/3d-penImageMain-515.jpg">
                    <div class = "carousel_products slide_item slide_down">
						
						<div class = "miniDescriptor">
							<span>3D Pen</span>
						</div>
						
					</div>
                </section>
                <div id = "right" class = "carousel_arrow" onclick = "carouselArrow(1)">
                	&gt;
                </div>
            </article>
			
			<article class = "header_whitespace">
				All Products
			</article>
			
            <article class = "products_main">
                <a class = "product" href = "product.php">
                    <img src="https://www.jaycar.com.au/medias/sys_master/images/9086409080862/hdmi-cable-with-rotating-plugs-1-5mImageMain-515.jpg">
					<div class = "miniDescriptor">
						<span>HDMI Cable with rotating heads.</span> <br>From $4.99.
					</div>
                </a>
                <a class = "product">
                    <img src="https://www.jaycar.com.au/medias/sys_master/images/9105149296670/in-car-quick-charger-for-smart-phones-and-tablets-micro-bImageMain-515.jpg"/>
					<div class = "miniDescriptor">
						<span>Car Charger with multiple charging options USB, Lightning or MicroUsb.</span> <br>From $12.00.
					</div>
                </a>
                <a class = "product">
                    <img src="https://www.jaycar.com.au/medias/sys_master/images/9101381337118/lead-free-solder-0-71mm-500g-rollImageMain-515.jpg">
					<div class = "miniDescriptor">
						<span>Lead Free Solder at varying lengths.</span> <br>From $49.00.
					</div>
                </a>
                <a class = "product">
                    <img src="https://www.jaycar.com.au/medias/sys_master/images/9054947508254/jeweller-s-screwdriver-setImageMain-515.jpg"/>
					<div class = "miniDescriptor">
						<span>Precision Screwdrivers Small and Large sets available. </span><br>From $39.00.
					</div>
                </a>
                <a class = "product">
                    <img src="https://www.jaycar.com.au/medias/sys_master/images/9105619976222/18-x-1w-rgb-led-par-stage-lightImageMain-515.jpg"/>
					<div class = "miniDescriptor">
						<span>LED Stage Lights, Come in varying sizes.</span><br>From $74.99.
					</div>
                </a>
            </article>
        </div>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Lachlan Gower, S3723825</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <script src="js/main.js"></script>
  </body>
</html>