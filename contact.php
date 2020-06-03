<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>Contact Us|Birds of Uttar Pradesh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Birds of <i>Uttar Pradesh</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="birdfinder.php" class="nav-link">Birds</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">Authors</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/image_4.jpg'); height: 30%;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <font style="font-size: 100px; color: #D8D8D8"class="mb-3 bread">Contact Us</font>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span>  <span>Contact Us> </span></p>
                  <div class="mouse">
                    <a href="#" class="mouse-icon">
                      <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3" id="con">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          
        </div>
        <div class="row block-9 ">
          <div class="col-lg-6 order-md-last d-flex">
            <form action='contactus.php'id="contact"method='POST' class="bg-light p-4 p-md-5 contact-form">
              <center></center><div class="form-group" >
                <input type="text" class="form-control" required="required"name="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" required="required"name="email"  placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" required="required"name="subject"  placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  required="required"form='contact'cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          	<div class="bg-white" ><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1qsoru8MhIOQ1PzdxgUBygmuOlRktF5eU" width="500px" height="600px"></iframe></div>
          </div>
        </div>
      </div>
    </section>
   
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="logo"><a href="#">Birds of <span>Uttar Pradesh</span></a></h2>
              <p>"The birds are silhouettes against the orange scene.They swiftly glide through the calm breeze showing off the variety of colours painted on their feathers.The birds swoop and do tricks in mid-air reassured that their wings would hold them fast."</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/groups/UPBirds/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Top Articles</h2>
              <?PHP
              include("conn.php");
                $sql = "select * from Blogs order by time desc limit 2";
              //to execute the sql query
              $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

              while($row = mysqli_fetch_array($result))
              {
                
                echo " <div class='block-21 mb-4 d-flex'>
                <a href='blog-single.php?id=".$row[0]."'class='img mr-4 rounded' style='background-image: url(images/".$row[1].");'></a>
                <div class='text'>
                  <h3 class='heading'><a href='blog-single.php?id=".$row[0]."'>".$row[2]."</a></h3>
                  <div class='meta'>
                    <div><a href='blog-single.php?id=".$row[0]."'><span class='icon-calendar'></span> ".$row[7]."</a></div>
                    <div><a href='blog-single.php?id=".$row[0]."'><span class='icon-person'></span>".$row[9]."</a></div>
                    <div><a href='blog-single.php?id=".$row[0]."'><span class='icon-chat'></span>".$row[10]."</a></div>
                  </div>
                </div>
              </div>";
                
              }
              ?>
              </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                 <li><a href="index.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
                <li><a href="birdfinder.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Birds</a></li>
                <li><a href="about.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Authors</a></li>
                <li><a href="contact.php" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Join Us for Updates!</h2>
              <div class="block-23 mb-3">
                <ul>
                  <form action='joinus.php' method='POST'>
                  <li><span><input type="text" class="ftco-footer-input" name="fname" placeholder="First Name"></span></li>
                  <li><span><input type="text" class="ftco-footer-input" name="lname" placeholder="Last Name"></span></li>
                  <li><span><input type="Email" class="ftco-footer-input" name="email" placeholder="Email"></span></li>
                  <span><center><button class="button" style="vertical-align:middle"><span>Subscribe!</span></button></center></span>
                </form>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>| Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>