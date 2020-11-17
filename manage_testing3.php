<?php
session_start();
error_reporting(0);
include('config.php');

$_SESSION['id']=$_SESSION['VAR2'];
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$b_name = mysqli_query($con,"SELECT * from business_table where bus_id='".$_SESSION['id']."' ");
$row = mysqli_fetch_array($b_name);
$pages= $row['num_floor'];
$Previous = $page - 1;
$Next = $page + 1;






?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  

  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style.min.css" rel="stylesheet">

  <link href="js/bootstrap.min.js" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->


   
  













  
   


  
  <style>

     .fa-color{
    color:limegreen;
     }
   .fa-color2{
    color:red;
     }









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
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar ">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">MDB</strong>
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
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About
                MDB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                target="_blank">Free
                download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free
                tutorials</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>MDB GitHub
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
        <img src="https://mdbootstrap.com/img/logo/mdb-email.png" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profile</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Maps</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a>
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
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
            <span>/</span>
            <span>Dashboard</span>
          </h4>

          <form class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>

          </form>

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
 <div class="row justify-content-center">
        <div class= "col-md-6">
   <div class= "card colorful-card">

   <div class="rounded-top deep-purple darken-4 text-white">
            <ul class="list-inline float-right my-0 py-1 pr-3">
              
              <li class="list-inline-item">
              <?php 
              $b_name = mysqli_query($con,"SELECT * from business_table where bus_id='".$_SESSION['id']."' ");
              $row = mysqli_fetch_array($b_name);
              echo $row['bus_name'];
              ?>
              </li>
              
              <li class="list-inline-item">
                <i class="fas fa-car-side" area-hidden="true"></i>
              </li>
              
            </ul>
          </div>

          
          <nav class="deep-purple accent-4 py-0">
          <div class="d-flex  justify-content-center">
 <ul class="pagination pg-blue  my-1   ">
    <li class="page-item ">
      <a href="manage_testing3.php?page=<?= $Previous; ?>" class="page-link text-white" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
              <?php for($i = 1; $i<= $pages; $i++) : ?>
               
				    	<li class="page-item ">
            

              <a class="page-link text-white " href="manage_testing3.php?page=<?= $i; ?>"><?= $i; ?>
              
             </a>
              </li>
				       <?php endfor; ?>


    <li class="page-item text-white">
      <a  href="manage_testing3.php?page=<?= $Next; ?>"  class="page-link text-white" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
              </div>
              </nav>
             
              















   
<div class="card-body">

<div class="row my-4 ">
<?php $street = $_SESSION['id']; ?> 
        <?php
        $var=1;
        $res = mysqli_query($con, "SELECT floor_num, lot_num, parking_status from parking_lot_table where floor_num='$page'and  bus_id='".$_SESSION['id']."' ");
        
        while ($row = mysqli_fetch_assoc($res)) {  ?>

        
            <?php $id = $row['lot_num'];?>     
            <?php $fid= $row['floor_num'];?>
            <?php $sql = "SELECT * FROM parking_lot_table WHERE bus_id='$street' and floor_num='$fid' and lot_num='$id' and parking_status='yes'";
            $result = mysqli_query($con, $sql);
            $count = mysqli_num_rows($result);?>
      <div class="col-md-6 mb-4 mb-md-0"> 

           <?php
            if ($count == 1) { ?>
            
                            <button class="btn  btn-outline-dark"  data-toggle= "popover" title="Warning!" data-trigger="hover" data-content="Parking Lot is OCCUPIED"> 
                           <i class="fas fa-4x fa-car fa-color2"></i>
                                  <div> Parking lot: <?php echo  $row['lot_num'] ; ?> </div>
                            </button> 

         <?php } else {?>
               
                     <?php $x=$row['lot_num'] ; ?> 
                     
                     <button class="btn  btn-outline-dark" name='click' value= <?= $x;?>  data-toggle="modal" data-target="#exampleModal" >
                          <i class="fas fa-4x fa-parking fa-color"></i>
                          <div>Parking lot: <?php echo  $row['lot_num'] ; ?>  </div>
                    </button> 
                      
               
                    <?php }?>
            </div>
        
        
     <?php
      $var=$var+1;
        }?>

    </div>
       
    </div>

    </div>
    </div>
    </div>
   
    

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header text-center text-white">
        <h4 class="modal-title w-100 font-weight-bold">BOOK</h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class=" fas fa-car-side prefix grey-text"></i>
          <input type="text" id="form3" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Enter vehicle number</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Enter customer email</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo">Submit<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>

 














              
 
  
























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

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
        role="button">Download
        MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
        free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
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



<script>
  $(function(){
  $('[data-toggle="popover"]').popover()
})
</script>






    

  
</body>

</html>













