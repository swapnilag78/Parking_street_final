<!DOCTYPE html>
<html lang="en">

<style>
    
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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

 <!-- Navbar -->
 <nav class="navbar fixed-top navbar-expand-lg navbar-light mdb-color lighten-2scrolling-navbar">
        <div class="container">
  
          <!-- Brand -->
          <a class="navbar-brand waves-effect">
            <img src="images/logo_1.jpg" alt="Logo" width="60px">
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
                <a class="nav-link waves-effect" href="#" target="_blank">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="#" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="#" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link waves-effect" href="#" target="_blank">Blog</a>
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

 

  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>


    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/streetlights.jpg" alt="Los Angeles" width="900" height="300">
        <div class="carousel-caption">
          <h2>Welcome to Parking Street</h2>
          <h4> Hotel Registration Window</h4>

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


  <form class="mr-5 mx-5 my-5" method="post" action="connection.php">

    <div class="form-group">
      <label for="business_n">Name of Business</label>
      <input type="text" class="form-control" name="business_n" placeholder="Business Name" required="required">
    </div>
    <div class="form-group">
      <label for="bus_type">Type of Business</label>
      <select class="form-control" name="bus_type" required="required"  placeholder="Choose">
        <option>Hotel</option>
        <option>Restaurant</option>
        <option>Mall</option>
      </select>
    </div>


      <div class="form-group ">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
      </div>
      <div class="form-group ">
        <label for="pass_w">Password</label>
        <input type="password" class="form-control" name="pass_w" placeholder="Password" required="required">
      </div>
    
    <div class="form-group">
      <label for="phne">Contact Number</label>
      <input type="phone" class="form-control" name="phne" placeholder="Contact Number" required="required">
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" name="address" placeholder="" required="required"></textarea>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" required="required">
      </div>
    </div>
    <div class="form-group">
      <label for="admin_user">Admin Username</label>
      <input type="text" class="form-control" name="admin_user" placeholder="Admin Username" required="required">
    </div>
    <div class="form-group">
      <label for="valet_park"> Do You Want Valet Parking?</label>
      <br>
    <label class="radio-inline">
      <input type="radio" name="valet_park" required="required"> Yes
    </label>
    <br>
    <label class="radio-inline">
      <input type="radio" name="valet_park" required="required"> No
    </label>
    </div>
    <div class="form-group">
      <label for="floor_number">Number of Floors</label>
      <select class="form-control" name="floor_number">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="number_lots">Number of lots on each floor</label>
      <input type="number" class="form-control" name="number_lots" placeholder=" Number of Parking Lots" required="required">
    </div>
    <div class="form-group">
      <label for="parking_rate">Enter Your Parking Lot Rate</label>
      <input type="number" class="form-control" name="parking_rate" placeholder=" Parking Lot Rate" required="required"> 
    </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck" required="required">
        <label class="form-check-label" for="gridCheck">
          <a href="terms&con.html">By signing up, I agree to have read and accepted terms of use, cookie and privacy policy of Parking Street</a>
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.php"> PARKING STREET</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>