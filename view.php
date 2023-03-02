<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- <title> Responsive Drop Down Navigation Menu </title>-->
    <link rel="stylesheet" href="kasike.css">
    <link rel="stylesheet" href="contact.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="stylesheet" href="t.css"> -->
  <!-- Bootstrap 5 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-+8nyFsjV+OEWkzRGyV7bgTFmpa/fQV7+3t0DQbajZJFYplC+X9v/QrLr0JFlkH+BO+tW67xtpG4o4fvyZLEaFw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Bootstrap 5 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-KfjSTxhMdJOl6B7U6ZKjQ2fgiCqcdGCUy0/UdnXCboc/MKxUrof4jk0zzFpY4G8HUp9XKjS5Qgkhmn1S/e5onw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    /* Add styles for the page here */
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
                    <li class="more">
                      <span><a href="#">More</a>
                      <i class='bx bxs-chevron-right arrow more-arrow'></i>
                    </span>
                      <ul class="more-sub-menu sub-menu">
                        <li><a href="#">ONLINE RADIO</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">ABOUT US</a>
                  <i class='bx bxs-chevron-down js-arrow arrow '></i>
                  <ul class="js-sub-menu sub-menu">
                    <li><a href="#">MISSION</a></li>
                    <li><a href="#">VISSION</a></li>
                    <li><a href="contact.html">REGISTER</a></li>
                    <li><a href="contact.html">LOGIN</a></li>
                  </ul>
                </li>
                <li><a href="portfollio.php">PORTFOLIO</a></li>
                <li><a href="cform.html">CONTACT US</a></li>
                <li><a href="#">BLOG</a></li>
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
      
    <a href="index.php" class="btn btn-primary my-3">UPLOAD</a>
    <div class="container">
        <div class="row">
            <?php
            include "connection.php";
            $sql = "SELECT * FROM `video` ORDER BY ID DESC";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
                while ($video = mysqli_fetch_assoc($res)) {
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <video src="uploads/<?=$video['video_url']?>" class="w-100" controls></video>
                </div>
            <?php
                }
            }else {
                echo "<h1>Empty</h1>";
            }
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
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
                  <div><a href="#">ONLINE RADIO</a></div>
                </div>
                <div class="right box">
                  <div class="topic">Subscribe us</div>
                  <form action="#">
                    <input type="text" placeholder="Enter email address">
                    <input type="submit" name="" value="Send">
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
          </div>
        </div>
      </div>
      <!-- <script src="kasike.js"></script> -->
 
 <script src="kasike.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
