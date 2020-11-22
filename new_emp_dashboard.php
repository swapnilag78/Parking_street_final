<?php
session_start();
error_reporting(0);
include('config.php');
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$b_name = mysqli_query($con,"SELECT * from business_table where bus_id='".$_SESSION['id']."' ");
$row = mysqli_fetch_array($b_name);
$pages= $row['num_floor'];
$Previous = $page - 1;
$Next = $page + 1;
date_default_timezone_set('Asia/Calcutta');
$busi=$_SESSION['id'];
if(isset($_POST['meow']))
{
 
 
 $extra="book_value.php";
 
 $host=$_SERVER['HTTP_HOST'];
 $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
 header("location:http://$host$uri/$extra");



}



if(isset($_POST['bookId']))
{
 $_SESSION['vechile_E']=$_POST['form3'];
 
  $_SESSION['varentry']=$_POST['bookId'];
  $timen=strtotime("now");
  
  $timen=date('y-m-d H:i:s',$timen);



  $query = mysqli_query($con, "UPDATE parking_lot_table SET vehicle_num='".$_SESSION['vechile_E']."',parking_status='yes',entering_time='$timen' WHERE bus_id='".$_SESSION['id']."' and lot_num= '".$_SESSION['varentry']."' and floor_num='$page'     ");
  if ($query) {
     echo "<script>alert('vehicle details entered successfully.');</script>";

    

     

    echo "<script>window.location.href ='new_emp_dashboard.php'</script>";
  }









}



if(isset($_POST['bookId2']))
{
 
  $_SESSION['varexit']=$_POST['bookId2'];

  $timeE=strtotime("now");
  
  $timeE=date('y-m-d H:i:s',$timeE);

  $arr2=mysqli_query($con,"SELECT * FROM parking_lot_table WHERE bus_id='".$_SESSION['id']."' and lot_num= '".$_SESSION['varexit']."' and floor_num='$page' ");
  $parkdet=mysqli_fetch_array($arr2);
  if($parkdet>0)
  {
  // check for spelling of vehicle in database
  $park=$parkdet['lot_id'];
  $venum=$parkdet['vehicle_num'];
$entryt=$parkdet['entering_time'];
$pre=$parkdet['pre_booking'];
$flr=$parkdet['floor_num'];
$lnum=$parkdet['lot_num'];

  }
$k=0;
  $querychange = mysqli_query($con, "UPDATE customer_table SET p_book=$k where cust_vehicle_num1='$venum' ");



//note : need to make many changes , the data base is not proper and i need to insert exit  time in paring lot before making it null and billing also
  $queryhist = mysqli_query($con, "insert into history_table(bus_id,floor_num,lot_num,vehicle_num,entering_time,exiting_time,pre_booking) values ( '$busi','$flr','$lnum', '$venum', '$entryt', '$timeE', '$pre')");



  $query = mysqli_query($con, "UPDATE parking_lot_table SET vehicle_num=NULL,parking_status='no',entering_time=NULL,exiting_time=NULL WHERE lot_id='$park'  ");
  if ($query) {
     echo "<script>alert('Parking Lot details have been updated.');</script>";

    

     

    echo "<script>window.location.href ='new_emp_dashboard.php'</script>";
  }








  
 //$extra="check2.php";
 
 //$host=$_SERVER['HTTP_HOST'];
 //$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
 //header("location:http://$host$uri/$extra");



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

  <link href="css/style.min.css" rel="stylesheet">

  <link href="js/bootstrap.min.js" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

 

  













  
   


  
  <style>
 /*     THE PART ENCLOSED BY THIS is written by me DONOT DELETE */

    .fa-color{
    color:limegreen;
     }
   .fa-color2{
    color:red;
     }
/*     THE PART ENCLOSED BY THIS is written by me DONOT DELETE */
     








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
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
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
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#" target="_blank">About Us
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#"
                target="_blank">Contact Us
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
              <a href="index.php" class="nav-link border border-light rounded waves-effect"
                >
                LOGOUT
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <div class="sidebar-fixed position-fixed text-center">

<a class="logo waves-effect ">
  <img src="images/Park_logo.png" alt="logo" height="150px" width="150px">
</a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profile</a>
        
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
            <a href="#/" target="_blank">Employee</a>
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
      <a href="new_emp_dashboard.php?page=<?= $Previous; ?>" class="page-link text-white" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
              <?php for($i = 1; $i<= $pages; $i++) : ?>
               
				    	<li class="page-item ">
            

              <a class="page-link text-white " href="new_emp_dashboard.php?page=<?= $i; ?>"><?= $i; ?>
              
             </a>
              </li>
				       <?php endfor; ?>


    <li class="page-item text-white">
      <a  href="new_emp_dashboard.php?page=<?= $Next; ?>"  class="page-link text-white" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
              </div>
              </nav>






   
<div class="card-body">

<div class="row my-4">
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
            <?php $y=$row['lot_num'] ; ?> 
                            <button class="open-AddBookDialog2 btn  btn-outline-dark" name='click2' data-id= "<?= $y;?>"  data-toggle="modal" data-target="#exampleModal2" >
                           <!-- data-trigger="hover"  should try to add this afterwards      -->
                             
                           <i class="fas fa-4x fa-car fa-color2"></i>
                                  <div> Parking lot: <?php echo  $row['lot_num'] ; ?> </div>
                            </button> 

         <?php } else {?>
               
                     <?php $x=$row['lot_num'] ; ?> 
                                        <button class="open-AddBookDialog btn  btn-outline-dark" name='click' data-id= "<?= $x;?>"  data-toggle="modal" data-target="#exampleModal" >
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
   
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-notify modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header text-center text-white">
        <h4 class="modal-title w-100 font-weight-bold">Exit vehicle </h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
     
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-danger" id ="bookId2" value="bookId2" name="bookId2">Exit<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
      </form>

    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-notify modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header text-center text-white">
        <h4 class="modal-title w-100 font-weight-bold">Enter vehicle </h4>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class=" fas fa-car-side prefix grey-text"></i>
          <input type="text" id="form3" name="form3" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Enter vehicle number</label>
        </div>

      
       <!-- <form action="" method="POST">-->
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" id ="bookId" value="bookId" name="bookId">ENTER<i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
      </form>

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
 
      
     

  










<


   
 

    


















        
     </div> 
</div>
</div>
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
      © 2020 Copyright:
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




<script>
$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
     $(".modal-footer #bookId").val( myBookId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});




</script>

<script>
$(document).on("click", ".open-AddBookDialog2", function () {
     var myBookId2 = $(this).data('id');
     $(".modal-footer #bookId2").val( myBookId2 );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});




</script>















    

  
</body>

</html>



















