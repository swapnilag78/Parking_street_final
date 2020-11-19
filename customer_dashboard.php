<?php
session_start();
error_reporting(0);
include('config.php');


if(isset($_POST['meow'])){
    
    $extra="manage_testing3.php";
 
    $host=$_SERVER['HTTP_HOST'];
    $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
    header("location:http://$host$uri/$extra");


}


if(isset($_POST["type"]))
{
 if($_POST["type"] == "sub_sub_category_data")
 {

$_SESSION['VAR2']=$_POST["sub_sub_category_id"];
 }
 
}


?>




<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Parking Street</title>
  <!-- Font Awesome -->


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  

  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">

  <link href="css/style.min.css" rel="stylesheet">

  <link href="js/bootstrap.min.js" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 

  













  
   


  
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="#">
        <strong class="blue-text">Parking Street</strong>
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
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link waves-effect" href="#">About Us
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link waves-effect" href="#">Contact Us
              </a>
            </li>
           </ul>
           

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
              <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
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
              <a href="#" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                LOGOUT
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="images/Park_logo.png" class="img-fluid" alt="logo">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Favourite Places</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Booking Status</a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="#" target="_blank">Customer</a>
            <span>/</span>
            <span>Dashboard</span>
          </h4>

          

        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">
 <!--ajax aaaaaaaaaaaaaaaaaaaaaaaaaaaaa    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa content-->
 <br />
    
    <h3 align="center">Check the availablity of a Parking Lot</h3>
    <br />
    <div class="card">
      <div class="card-header-title">Select Place</div>
      <div class="card-body">
        <div class="form-group">
          <label>Select Business Type</label>
          <select name="category_item" id="category_item" class="form-control input-lg" data-live-search="true" title="Select Category">

          </select>
        </div>
        <div class="form-group">
          <label>Select Business Name</label>
          <select name="sub_category_item" id="sub_category_item" class="form-control input-lg" data-live-search="true" title="Select Sub Category">

          </select>
        </div>
      </div>
    </div>
 


    <form action="" method="POST"> <button class="btn  btn-primary" name='meow' >Search </button> </form>












              
 
  
























            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              Pie chart
            </div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="pieChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

          <!--Card-->
          <div class="card mb-4">

            <!--Card content-->
            <div class="card-body">

              <!-- List group links -->
              <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action waves-effect">Sales
                  <span class="badge badge-success badge-pill pull-right">22%
                    <i class="fas fa-arrow-up ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Traffic
                  <span class="badge badge-danger badge-pill pull-right">5%
                    <i class="fas fa-arrow-down ml-1"></i>
                  </span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Orders
                  <span class="badge badge-primary badge-pill pull-right">14</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Issues
                  <span class="badge badge-primary badge-pill pull-right">123</span>
                </a>
                <a class="list-group-item list-group-item-action waves-effect">Messages
                  <span class="badge badge-primary badge-pill pull-right">8</span>
                </a>
              </div>
              <!-- List group links -->

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

      </div>
 
     
      
      
              
              
               
       

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="#" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="#" target="_blank"> Parking-Street </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <!-- Charts -->
  <script>
    
    

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
        datasets: [{
          data: [300, 50, 100, 40, 120],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });

  </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>






    

  
</body>

</html>












<script>
$(document).ready(function(){

  $('#category_item').selectpicker();

  $('#sub_category_item').selectpicker();

  load_data('category_data');

  function load_data(type, category_id = '')
  {
    $.ajax({
      url:"load_data.php",
      method:"POST",
      data:{type:type, category_id:category_id},
      dataType:"json",
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type == 'category_data')
        {
          $('#category_item').html(html);
          $('#category_item').selectpicker('refresh');
        }
        else
        {
          $('#sub_category_item').html(html);
          $('#sub_category_item').selectpicker('refresh');
        }
      }
    })
  }

  function final (type, sub_sub_category_id = '')
  {
    $.ajax({
      url:"testingadmin_3.php",
      method:"POST",
      data:{type:type, sub_sub_category_id:sub_sub_category_id},
      dataType:"json",
     
    })
  }








  $(document).on('change', '#category_item', function(){
    var category_id = $('#category_item').val();
    load_data('sub_category_data', category_id);
  });

  $(document).on('change', '#sub_category_item', function(){
    var sub_sub_category_id = $('#sub_category_item').val();
    final('sub_sub_category_data', sub_sub_category_id);
  });





  
});
</script>