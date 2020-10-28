<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parking Street</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      </ul>
    </div>
  </nav>

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
      <input type="text" class="form-control" name="business_n" placeholder="Business Name">
    </div>
    <div class="form-group">
      <label for="business">Type of Business</label>
      <input type="text" class="form-control" name="business" placeholder="Business Type">
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <input type="text" class="form-control" name="address" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="">
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
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Number of Floors</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Number of lots on each floor</label>
      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          By signing up, I agree to have read and accepted terms of use, cookie and privacy policy of Parking Street
        </label>
      </div>
    </div>
    <a href="admin_login.php"> <button type="submit" class="btn btn-primary">Submit</button> </a>
  </form>










  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>