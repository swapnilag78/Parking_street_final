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


if(isset($_POST['bookId']))
{
 $_SESSION['hvechile_E']=$_POST['form3'];
 $_SESSION['hcust_em']=$_POST['form2'];
  $_SESSION['hvarentry']=$_POST['bookId'];
  
  $timen=strtotime("now");
  
  $timen=date('y-m-d H:i:s',$timen);

  $query = mysqli_query($con, "UPDATE parking_lot_table SET vehicle_num='".$_SESSION['hvechile_E']."',parking_status='yes',entering_time='$timen' WHERE bus_id='".$_SESSION['id']."' and lot_num= '".$_SESSION['hvarentry']."' and floor_num='$page'     ");
  if ($query) {
     echo "<script>alert('vehicle details entered successfully.');</script>";

    

     

    echo "<script>window.location.href ='new_hotel_parking.php'</script>";


  }







 //$extra="check.php";
 
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
        <a class="navbar-brand waves-effect" href="#" target="_blank">
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
              <a class="nav-link waves-effect" href="#" target="_blank">About
                Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="#"
                target="_blank">Contact Us
                </a>
            
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
              <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-linkedin"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link border border-light rounded waves-effect"
                target="_blank">LOGOUT
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
        <img src="images/Park_logo.png" class="img-fluid" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Update Profile</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Manage Employee</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Manage Parking</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Parking History</a>
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
            <a href="#" target="_blank">Business Admin</a>
            <span>/</span>
            <span>Manage Parking</span>
          </h4>

        </div>

      </div>
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-12 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">
 <!--ajax aaaaaaaaaaaaaaaaaaaaaaaaaaaaa    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa content-->
 


 <div class="row justify-content-center">
        <div class= "col-md-4">
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
      <a href="new_hotel_parking.php?page=<?= $Previous; ?>" class="page-link text-white" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
              <?php for($i = 1; $i<= $pages; $i++) : ?>
               
				    	<li class="page-item ">
            

              <a class="page-link text-white " href="new_hotel_parking.php?page=<?= $i; ?>"><?= $i; ?>
              
             </a>
              </li>
				       <?php endfor; ?>


    <li class="page-item text-white">
      <a  href="new_hotel_parking.php?page=<?= $Next; ?>"  class="page-link text-white" aria-label="Next">
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
            
                            <button class="btn  btn-outline-dark"  data-toggle= "popover" title="Warning!" data-trigger="hover" data-content="Parking Lot is OCCUPIED"> 
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
   
 

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-notify modal-info" role="document">
    <div class="modal-content">
      <div class="modal-header text-center text-white">
        <h4 class="modal-title w-100 font-weight-bold">BOOK </h4>
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

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" name="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Enter customer email</label>
        </div>
       <!-- <form action="" method="POST">-->
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo" id ="bookId" value="bookId" name="bookId">Submit<i class="fas fa-paper-plane-o ml-1"></i></button>
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
      
        <!--Grid column-->

      </div>
 
      
     

  













   
 

    


















        
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
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-linkedin mr-3"></i>
      </a>

      <a href="#" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
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
  $(function(){
  $('[data-toggle="popover"]').popover()
})
</script>








<script>
$(function () {
$('.example-popover').popover({
container: 'body'
})
})
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














    

  
</body>

</html>



















