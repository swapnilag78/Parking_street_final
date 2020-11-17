<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/style_1.css">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/style_2.css">
  <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>
    <link rel="stylesheet" href="css/responsiveslides.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking Street</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style_1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body>
  <!--------navigation bar---------------->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="images/final_logo.jpg" width="60" height="50" class="d-inline-block align-top" alt="LOGO" loading="lazy">
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
      </ul>
    </div>
  </nav>




  <!--image---->
  <div class="gallery">
      <li><img src="images/photo1.jpg" alt="image"></li>
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

        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img3.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Employee Login</h3>
            <p><b>Click Here!</b></p>
            <div class="button"><span><a href="employee_signin.php">Click Here</a></span></div>
          </div>
        </div>


      </div>
    </div>
  </div>


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
  <?php include('footer.php'); ?>
  <!-- /Footer-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <a href="hotel_regis.php"> <button type="button" class="btn btn-primary"> Register Now with Us!</button></a>
</body>

</html>