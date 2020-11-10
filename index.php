<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking Street</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style_1.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 

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
      </ul>
    </div>
  </nav>

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>


    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/car.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Welcome to Parking Street</h3>
          <p>A unique parking experience for your car!!</p>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <span class="border">
    <section class="my-5">
      <div class="mr-5 mx-5">
        <h1> Why Choose our Platform?</h1>
      </div>
    </section>
  </span>

  <div class="content-grids">
    <div class="wrap">
      <div class="section group">


        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img3.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Customers</h3>
            <p>Register & Book Appointment</p>
            <div class="button"><span><a href="customer_signin.php">Click Here</a></span></div>
          </div>
        </div>

        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img1.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Hotel Login</h3>

            <div class="button"><span><a href="business_em_ad.php">Click Here</a></span></div>
          </div>
        </div>

        <div class="listview_1_of_3 images_1_of_3">
          <div class="listimg listimg_1_of_2">
            <img src="images/grid-img2.png">
          </div>
          <div class="text list_1_of_2">
            <h3>Admin Login <br> (Owners)</h3>

            <div class="button"><span><a href="ad_owner.php">Click Here</a></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>