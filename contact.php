
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen</title>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="kasike.css">
<style>
	.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger .close {
  color: #721c24;
}

.alert-danger strong {
  font-weight: bold;
}
</style>

</head>
<body>

<section class="header">
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">MPORIPORI</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">MPORIPORI</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="kasike.html">HOME</a></li>
          <li>
            <a href="#">SERVICES</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="view.php">VIEW MY VIDEO</a></li>
              <li><a href="#">VIDEO SHOOTING</a></li>
              <li><a href="#">GRAPHICS DESIGN</a></li>           
              
            </ul>
          </li>
          <li>
            <a href="#">ABOUT US</a>
            <i class='bx bxs-chevron-down js-arrow arrow '></i>
            <ul class="js-sub-menu sub-menu">
              <li><a href="mission.html">MISSION</a></li>
              <li><a href="#">VISSION</a></li>
              <li><a href="background.php">OUR BACKGROUND</a></li>
                         </ul>
          </li>
          <li><a href="portfollio.php">PORTFOLIO</a></li>
          <li><a href="cont.php">CONTACT US</a></li>
          <li><a href="blog.html">BLOG</a></li>
        </ul>
      </div>
      <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div>
    </div>
    
  </nav>
 

</section>
		<div id="message-container">
                      <?php
                                          if (isset($_GET['error'])) {
                                     echo '<p style="color:#eb2f06; text-align: center;">Error: ' . $_GET['error'] . '</p>';
                                                 }

                                if (isset($_GET['success'])) {
                                           echo '<p style="color:#eb2f06; text-align: center;">' . $_GET['success'] . '</p>';
                       }
                                     ?>
</div>
<script>
  // Get the message container element
  var messageContainer = document.getElementById("message-container");

  // Remove the message container after 5 seconds
  setTimeout(function() {
    messageContainer.parentNode.removeChild(messageContainer);
  }, 5000);
</script>
<!-- partial:index.partial.html
<a href="https://front.codes/" class="logo" target="_blank">
		<img src="https://assets.codepen.io/1462889/fcy.png" alt="">
	</a> -->
	<div class="section">
		<div class="container">
		  <div class="row full-height justify-content-center">
			<div class="col-12 text-center align-self-center py-5">
			  <div class="section pb-5 pt-5 pt-sm-2 text-center">
				<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			
				  <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
				  <label for="reg-log"></label>
				  <div class="card-3d-wrap mx-auto">
					<div class="card-3d-wrapper">
					  <div class="card-front">
						<div class="center-wrap">
							<form method="post" action="login.php">
						  <div class="section text-center">
							<h4 class="mb-4 pb-3">Log In</h4>
							<div class="form-group">
							  <input type="email" name="logema" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
							  <i class="input-icon uil uil-at"></i>
							</div>  
							<div class="form-group mt-2">
							  <input type="password" name="logpas" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
							  <i class="input-icon uil uil-lock-alt"></i>
							</div>
							<button type="submit" class="btn mt-4" name="login">Log In</button>
							<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
						  </div>
						</form>
						</div>
					  </div>
					  <div class="card-back">
						<div class="center-wrap">
							<form method="post" action="process_form.php">
						  <div class="section text-center">
						
							<h4 class="mb-4 pb-3">Sign Up</h4>
							<div class="form-group">
							  <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
							  <i class="input-icon uil uil-user"></i>
							</div>  
							<div class="form-group mt-2">
							  <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
							  <i class="input-icon uil uil-at"></i>
							</div>  
							<div class="form-group mt-2">
							  <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
							  <i class="input-icon uil uil-lock-alt"></i>
							</div>
							<button type="submit" class="btn mt-4" name="signup">Sign Up</button>
							
						  </div>
						</form>
						</div>
					  </div>
					</div>
				  </div>
			
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	
	  
<!-- partial -->
<section class="footer">
	<footer>
	  <div class="content">
		<div class="left box">
		  <div class="upper">
			<div class="topic">About us</div>
			<p>MPORIPORI STUDIO This studio found at
				 kyela-mbeya whichdealwithall issue concerned with 
				 videoshooting,photographer,designing</p>

		  </div>
		  <div class="lower">
			<div class="topic">Contact us</div>
			<div class="phone">
			  <a href="#"><i class="fas fa-phone-volume"></i>+255768344794</a>
			</div>
			<div class="email">
			  <a href="#"><i class="fas fa-envelope"></i>officialpremier05@gmail.com</a>
			</div>
		  </div>
		</div>
		<div class="middle box">
		  <div class="topic">Our Services</div>
		  <div><a href="#">VIDEO EDITING</a></div>
		  <div><a href="#">VIDEO SHOOTING</a></div>
		  <div><a href="#">GRAPHICS DESIGN</a></div>
		  <div><a href="#">WEB DESIGN</a></div>
		  <div><a href="background.php">OUR BACKGROUND</a></div>
		  <div><a href="#">ONLINE RADIO</a></div>
		</div>
		<div class="right box">
		  <div class="topic">Subscribe us</div>
		  <form action="send.php" method="post">
                    <input type="text" placeholder="Enter email address" name="email">
                    <input type="submit" name="submit" value="Send">
					<div id="message-container">
                      <?php
                                          if (isset($_GET['error'])) {
                                     echo '<p>Error: ' . $_GET['error'] . '</p>';
                                                 }

                                if (isset($_GET['success'])) {
                                           echo '<p>' . $_GET['success'] . '</p>';
                       }
                                     ?>
</div>
<script>
  // Get the message container element
  var messageContainer = document.getElementById("message-container");

  // Remove the message container after 5 seconds
  setTimeout(function() {
    messageContainer.parentNode.removeChild(messageContainer);
  }, 5000);
</script>
                    <div class="media-icons">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-youtube"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                  </form>
		</div>
	  </div>
	  <div class="bottom">
		<p>Copyright©2023 <a href="#">MPORIPORI STUDIO</a> All rights reserved</p>
	  </div>
	</footer>
   </section>
   
  
  
  <!-- <script  src="./script.js"></script> -->
  <script src="kasike.js"></script>

</body>
</html>