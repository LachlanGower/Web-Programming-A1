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
    <main class = "container">		
		<!--Login Modal-->
        <div class = "login_modal" id = "modal">
			
            <form action = "https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" target="_self" method="post">

				<input class = "loginform" type="email" name="email" value="" placeholder = "Email"/><br/>

				<input class = "loginform" type="password" name="password" value="" placeholder = "Password"/><br/>
                
				<input class = "submit button" type="submit" value="Login"/>

			</form>
    	</div>
		<!-- -->
		
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