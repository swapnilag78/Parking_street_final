<!DOCTYPE html>
<html lang="en">

<style>
    .navbar .navbar-brand img {
      height: 20px;
    }

    .navbar .navbar-brand {
      padding-top: 0;
    }

    .navbar .nav-link {
      color: #eee6e6!important;
    }

    .navbar .button-collapse {
      padding-top: 1px;
    }

    .card-intro .card-body {
      padding-top: 1.5rem;
      padding-bottom: 1.5rem;
      border-radius: 0 !important;
    }

    .card-intro .card-body h1 {
      margin-bottom: 0;
    }

    .card-intro {
      margin-top: 64px;
    }

    @media (max-width: 450px) {
      .card-intro {
        margin-top: 56px;
      }
    }

    @media (min-width: 1441px) {
      .card-intro {
        padding-left: 0 !important;
      }
    }
</style>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Parking Street</title>
  
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="MDB/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="MDB/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="MDB/css/style.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light mdb-color lighten-2scrolling-navbar">
        <div class="container">
  
          <!-- Brand -->
          <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
            <img src="images/Park_logo.png" alt="Logo">
          </a>
  
          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
            <!-- Left -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link waves-effect" href="index_page.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="about_us.php" >About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="contact_us.php" >Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="blog.php" >Blog</a>
              </li>
            </ul>
   
            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
              <li class="nav-item">
                <a href="#" class="nav-link waves-effect" target="_blank">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link waves-effect" target="_blank">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link waves-effect"
                  target="_blank">
                  <i class="fab fa-github"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link waves-effect" target="_blank">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
  
          </div>
  
        </div>
      </nav>
      <!-- Navbar -->
  
      
  <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="images/overhead-shot-assorted-cars-different-colors-parking-lot_1.jpg"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Welcome to Parking Street</h3>
        <p>Know Your Parking</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/car-car-park_1.jpg"
          alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Have trouble finding a parking lot?</h3>
        <p>Become a customer now!</p>
         <a href="customer_signin.php"> <button type="button" class="btn btn-primary">Sign In</button></a>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="images/fred-rivett-e2aW4jsdRyM-unsplash_1.jpg"
          alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Want to manage your parking lot in a more effeicient way?</h3>
        <p>Create a Business Account to manage it better!</p>
 <a href="hotel_regis.php"> <button type="button" class="btn btn-primary">Register Now with Us</button></a>

      
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    </header>

    <div class="container my-5 py-5 z-depth-1">
 
 
        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
    
          <!--Grid row-->
          <div class="row">
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <h3 class="font-weight-bold">Why choose us?</h3>
    
              <p class="text-muted">
                
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                molestiae
                numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.
              </p>
    
            </div>
            <!--Grid column-->
    
            <!--Grid column-->
            <div class="col-md-6 mb-4 mb-md-0">
    
              <!--Image-->
              <div class="view overlay z-depth-1-half">
                <img src="images/pexels-daria-shevtsova-1222473_1.jpg" class="img-fluid"
                  alt="">
                <a href="#">
                  <div class="mask rgba-white-light"></div>
                </a>
              </div>
    
            </div>
            <!--Grid column-->
    
          </div>
          <!--Grid row-->
    
    
        </section>
        <!--Section: Content-->
    
    
      </div>


      
    <div class="container my-5">

        <!-- Section -->
        <section>
      
          <h6 class="font-weight-bold text-center grey-text text-uppercase small mb-4">Services</h6>
          <h3 class="font-weight-bold text-center dark-grey-text pb-2">Our Services</h3>
          <hr class="w-header my-4">
          <p class="lead text-center text-muted pt-2 mb-5">
            Join thousands of satisfied customers using our template
            globally.
          </p>
      
          <div class="row">
      
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card text-center bg-light text-dark">
                <div class="card-body">
                  <p class="mt-4 pt-2"><i class="fa fa-user fa-4x" aria-hidden="true"></i></p>
                  <h5 class="font-weight-normal my-4 py-2"> Customer Login  <br> <a class="dark-grey-text" href="customer_signin.php"> [Click Here]</a></h5>
                  <p class="text-muted mb-4">He polite be object change. Consider no overcame yourself sociable children.</p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card text-center bg-light text-dark">
                <div class="card-body">
                  <p class="mt-4 pt-2"><i class="fa fa-briefcase fa-4x" aria-hidden="true"></i></p>
                  <h5 class="font-weight-normal my-4 py-2"> Business Login <br> <a class="dark-grey-text" href="business_em_ad.php">[Click Here]</a></h5>
                  <p class="text-muted mb-4">He polite be object change. Consider no overcame yourself sociable children.</p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-xl-3 mb-4">
              <div class="card text-center bg-light text-dark">
                <div class="card-body">
                  <p class="mt-4 pt-2"><i class="fa fa-user-circle fa-4x" aria-hidden="true"></i></p>
                  <h5 class="font-weight-normal my-4 py-2">Employee Login <br> <a class="dark-grey-text" href="employee_signin.php">[Click Here]</a></h5>
                  <p class="text-muted mb-4">He polite be object change. Consider no overcame yourself sociable children.</p>
                </div>
              </div>
            </div>
      
            <div class="col-md-6 col-xl-3">
              <div class="card text-center bg-light text-dark">
                <div class="card-body">
                  <p class="mt-4 pt-2"><i class="fa fa-lock fa-4x" aria-hidden="true"></i></p>
                  <h5 class="font-weight-normal my-4 py-2"> Admin Login <br> <a class="dark-grey-text" href="ad_owner.php">[Click Here]</a></h5>
                  <p class="text-muted mb-4">He polite be object change. Consider no overcame yourself sociable children.</p>
                </div>
              </div>
            </div>
      
          </div>
      
        </section>
        <!-- Section -->
      
      </div>


      <!-- Footer -->
<footer class="page-footer font-small navbar-dark  deep-purple accent-9">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="index_page.php">Home</a>
            </li>
            <li>
              <a href="about_us.php">About Us</a>
            </li>
            <li>
              <a href="contact_us.php">Contact Us</a>
            </li>
            <li>
              <a href="blog.php">Blog</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"> ParkingStreet.com</a>
    </div>
    <!-- Copyright -->

  <!-- jQuery -->
  <script type="text/javascript" src="MDB/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="MDB/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="MDB/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="MDB/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>