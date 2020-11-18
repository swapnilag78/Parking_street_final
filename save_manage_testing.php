<?php
session_start();
include('config.php');
include('check_login.php');
check_login();

$page = isset($_GET['page']) ? $_GET['page'] : 1;
$b_name = mysqli_query($con,"SELECT * from business_table where bus_id='".$_SESSION['id']."' ");
$row = mysqli_fetch_array($b_name);
$pages= $row['num_floor'];
$Previous = $page - 1;
$Next = $page + 1;

if(isset($_POST['meow']))
{
 

  $extra="book_value.php";
 
 $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
 header("location:http://$host$uri/$extra");



}

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
    
    <link rel="stylesheet" href="fontawesome/css/all.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/mdb.min.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/style.css"> <!-- mine -->
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

   

 

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

 <ul class="pagination pg-blue my-1 py-1 ">
    <li class="page-item">
      <a href="manage_testing.php?page=<?= $Previous; ?>" class="page-link text-white" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
              <?php for($i = 1; $i<= $pages; $i++) : ?>
               
				    	<li class="page-item ">
            

              <a class="page-link text-white" href="manage_testing.php?page=<?= $i; ?>"><?= $i; ?>
              
             </a>
              </li>
				       <?php endfor; ?>


    <li class="page-item">
      <a  href="manage_testing.php?page=<?= $Next; ?>"  class="page-link text-white" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>









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


<form action="" method="post">
   <button type="button" class="btn btn-success  pull-right" name="meow"> Submit </button> 
    </form>






    


    <script src="MDB/js/jquery.js"></script>
<script src="MDB/js/popper.js"></script>
<script src="MDB/js/bootstrap.min.js"></script>



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


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>



  </body>
</html>