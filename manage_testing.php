
<?php
session_start();
include('config.php');
include('check_login.php');
check_login();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/mdb.min.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/style.css"> <!-- mine -->
 

<style>
    .fa-color{
    color:limegreen;
     }
   .fa-color2{
    color:red;
     }

</style>


    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>


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
 <nav class="navbar navbar-expand-lg navbar-dark deep-purple accent-4 d-flex justify-content-between">

<div>
  <ul class="list-inline my-2 py-1 text-white">
    <li class="list-inline-item">
      <i class="fas fa-bars" aria-hidden="true"></i>
    </li>
    <li class="list-inline-item pl-3">
      Select floor
    </li>
  </ul>
 



</div>

<div>
  <ul class="list-inline my-2 py-1 text-white">
    <li class="list-inline-item">
      <i class="fas fa-search" aria-hidden="true"></i>
    </li>
    <li class="list-inline-item pl-3">
      <i class="fas fa-cog" aria-hidden="true"></i>
    </li>
  </ul>
</div>

</nav>






   
<div class="card-body">

<div class="row my-4">
<?php $street = $_SESSION['id']; ?> 
        <?php
        $var=1;
        $res = mysqli_query($con, "SELECT floor_num, lot_num, parking_status from parking_lot_table where bus_id='".$_SESSION['id']."' ");
        
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
               
              
                     <button class="btn  btn-outline-dark">
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
   
 













    



<script src="MDB/js/popper.js"></script>
<script src="MDB/js/bootstrap.min.js"></script>
<script src="MDB/js/jquery.js"></script>



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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
  </body>
</html>