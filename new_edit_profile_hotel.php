<?php
session_start();
error_reporting(0);
include('config.php');

if (isset($_POST['submit'])) {
	$busname = $_POST['business_n'];
	$bus_address = $_POST['address'];
	$bus_contactno = $_POST['phne'];
	$bus_email = $_POST['email'];
	$bus=$_SESSION['id']; 
	$sql = mysqli_query($con, "UPDATE business_table set bus_name='$busname',bus_address='$bus_address',bus_contact_num='$bus_contactno',bus_email='$bus_email' where bus_id='$bus'");
	if ($sql) {
		echo "<script>alert('Hotel Details updated Successfully');</script>";
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
    <div class="sidebar-fixed position-fixed text-center">

      <a class="logo waves-effect ">
        <img src="images/Park_logo.png" alt="logo" height="150px" width="150px">
      </a>

      <div class="list-group list-group-flush">
        <a href="new_bus_dash.php" class="list-group-item active waves-effect">
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
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Business Admin</a>
            <span>/</span>
            <span>Update Profile</span>
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
 
 <div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="card card-white">
											<div class="card-header">
												<h3>Edit Your Profile</h3>
											</div>
											<div class="card-body">
												<?php $sql = mysqli_query($con, "select * from business_table where admin_username='" . $_SESSION['login'] . "'");
												while ($data = mysqli_fetch_array($sql)) {
												?>
													<h4><?php echo htmlentities($data['bus_name']); ?>'s Profile</h4>

													<hr />
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="business_n">
																Name Of Business
															</label>
															<input type="text" name="business_n" class="form-control" value="<?php echo htmlentities($data['bus_name']); ?>">
														</div>


														<div class="form-group">
															<label for="address">
																Hotel Address
															</label>
															<textarea name="address" class="form-control"><?php echo htmlentities($data['bus_address']); ?></textarea>
														</div>

														<div class="form-group">
															<label for="valet_park"> Do You Want Valet Parking?</label>
															<label class="radio-inline">
																<input type="radio" name="valet_park" checked <?php echo htmlentities($data['bus_valet']); ?> >
															</label>
															<label class="radio-inline">
																<input type="radio" name="valet_park" <?php echo htmlentities($data['bus_valet']); ?>>
															</label>
														</div>

														<div class="form-group">
															<label for="phne">
																Hotel Contact no
															</label>
															<input type="text" name="phne" class="form-control" required="required" value="<?php echo htmlentities($data['bus_contact_num']); ?>">
														</div>

														<div class="form-group">
															<label for="email">
																Email
															</label>
															<input type="email" name="email" class="form-control" readonly="readonly" value="<?php echo htmlentities($data['bus_email']); ?>">
														</div>




													<?php } ?>


													<button type="submit" name="submit" class="btn btn-o btn-primary">
														Update
													</button>
													</form>
											</div>
										</div>
									</div>

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









    

  
</body>

</html>



















