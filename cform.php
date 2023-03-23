<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="contact.css">
     <link rel="stylesheet" href="kasike.css">
     <!-- <link rel="stylesheet" href="style.css">   -->
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
                <li><a href="view.php">VIDEO SHOOTING</a></li>
                <li><a href="#">GRAPHICS DESIGN</a></li>           
                
              </ul>
            </li>
            <li>
              <a href="#">ABOUT US</a>
              <i class='bx bxs-chevron-down js-arrow arrow '></i>
              <ul class="js-sub-menu sub-menu">
                <li><a href="mission.html">MISSION</a></li>
                <li><a href="mission.html#visions">VISSION</a></li>
                <li><a href="contact.php">REGISTER</a></li>
                <li><a href="contact.php">LOGIN</a></li>
                <li><a href="background.php">OUR BACKGROUND</a></li>
                           </ul>
            </li>
            <li><a href="portfollio.php">PORTFOLIO</a></li>
            <li><a href="cform.php">CONTACT US</a></li>
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
<section>
<!-- partial:index.partial.html -->
<div class="container">
	<div class="row">
	  <h1>Contact Us</h1>
	</div>
	<div class="row">
	  <h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<form method="post" action="signup.php">
	  <div class="row input-container">
		<div class="col-xs-12">
		  <div class="styled-input wide">
			<input type="text" name="name" required />
			<label>Name</label>
		  </div>
		</div>
		<div class="col-md-6 col-sm-12">
		  <div class="styled-input">
			<input type="email" name="email" required />
			<label>Email</label>
		  </div>
		</div>
		<div class="col-md-6 col-sm-12">
		  <div class="styled-input" style="float:right;">
			<input type="tel" name="phone" required />
			<label>Phone Number</label>
		  </div>
		</div>
		<div class="col-xs-12">
		  <div class="styled-input wide">
			<textarea name="message" required></textarea>
			<label>Message</label>
		  </div>
		</div>
		<div class="col-xs-12">
		  <div class="btn-lrg submit-btn"><input type="submit" value="Send Message" name="send"></div>
		</div>
	  </div>
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
	</form>
  
  </div>

  <div id="message"></div>
 
</section>
<section class="footer">
  <footer>
    <div class="content">
      <div class="left box">
        <div class="upper">
          <div class="topic">About us</div>
          <p>MPORIPORI STUDIO This studio found at kyela-mbeya which deal with all issue concerned with videoshooting,photographer,designing</p>
        </div>
        <div class="lower">
          <div class="topic">Contact us</div>
          <div class="phone">
          <a href="tel:+255768344794"><i class="fa fa-phone"></i>+255768344794</a>
          </div>
          <div class="email">
            <a href="malto:officialpremier05@gmail.com"><i class="fa fa-envelope"></i>officialpremier05@gmail.com</a>
          </div>
          <div class="location">
            <a href=""><i class="fa fa-map-marker" ></i>123 KYELA-MBEYA TANZANIA</a>
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
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                  <a href="#"><i class="fa fa-instagram" ></i></a>
                  <a href="#"><i class="fa fa-twitter-square"></i></a>
                  <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                  </form>
      </div>
    </div>
    <div class="bottom">
      <p>Copyright©2023 <a href="#">MPORIPORI STUDIO</a> All rights reserved</p>
    </div>
  </footer>
 </section>
 


  


  
<script src="kasike.js"></script>
</body>
</html>