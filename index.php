<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style_1.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style_2.css">
  <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
  <link rel="stylesheet" href="css/responsiveslides.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking Street</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>

</head>

<body>
  <!--------navigation bar---------------->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="images/final_logo.jpg" width="60" height="50" class="d-inline-block align-top" alt="" loading="lazy">

    </a>
    <a class="navbar-brand" href="#">Parking Street</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto px-3">
        <li class="nav-item active pr-5">
          <a class="nav-link pr-6" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item pr-5">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item pr-4">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <a href="hotel_regis.php"> <button type="button" class="btn btn-primary">Register Now with Us</button></a>
        <div>
    </div>
      </ul>
    </div>
  </nav>
    </div>
 
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
    </ul>

    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

 

  <div class="content-grids">
    <div class="wrap">
      <div class="section group">


        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img3.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Customers</h3>
            <p><b>Register Now!</b></p>
            <div class="button"><span><a href="customer_signin.php">Click Here</a></span></div>
          </div>
        </div>

        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img1.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Business Login</h3>
            <p><b> Already have an account?</b> </p>
            <div class="button"><span><a href="business_em_ad.php">Click Here</a></span></div>
          </div>
        </div>

        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img2.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Admin Login</h3>
            <h5>[Owners]</h5>
            <div class="button"><span><a href="ad_owner.php">Click Here</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides">
					      <li><img src="images/background-pic-11.jpg" alt=""></li>
					      <li><img src="images/car3.jpg" alt=""></li>
					      <li><img src="images/Parking Lot.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>

  <span class="border">
    <section class="my-5">
      <div class="mr-5 mx-5">
        <h1> Why Choose our Platform?</h1>
        <div class="why-us">
          <p></p>
        </div>
      </div>
    </section>
  </span>

  <!--Footer -->
<?php include('footer.php');?>
<!-- /Footer--> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>