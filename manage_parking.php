<?php
session_start();
include('config.php');
include('check_login.php');
check_login();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel | Parking Lot</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
    <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/theme-4.css" id="skin_color" />
    <link rel="stylesheet" href="fontawesome/css/all.css"> <!-- mine -->
    <link rel="stylesheet" href="fontawesome/css/all.css"> <!-- mine -->
    <link rel="stylesheet" href="fontawesome/css/all.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/bootstrap.min.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/mdb.min.css"> <!-- mine -->
    <link rel="stylesheet" href="MDB/css/style.css"> <!-- mine -->




 


</head>

<style>
.fa-color{
    color:limegreen;
}
.fa-color2{
    color:red;
}

</style>




<body>
    <div id="app">
        <?php include('sidebar.php'); ?>
        <div class="app-content">

            <?php include('header.php'); ?>

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Parking Lot</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li>
                                    <span> Hotel Parking Lot</span>
                                </li>

                            </ol>
                        </div>
                    </section>
                    <!-- end: PAGE TITLE -->
                    <!-- start: BASIC EXAMPLE -->

                   
                    
               

                        <!-- start: FOOTER -->
                        <?php include('include/footer.php'); ?>
                        <!-- end: FOOTER -->

                        <!-- start: SETTINGS -->
                        <?php include('include/setting.php'); ?>
                        <!-- end: SETTINGS -->
                       </div>
                      <!-- start: MAIN JAVASCRIPTS -->
                    <script src="vendor/jquery/jquery.min.js"></script>
                    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                    <script src="vendor/modernizr/modernizr.js"></script>
                    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
                    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                    <script src="vendor/switchery/switchery.min.js"></script>
                    <!-- end: MAIN JAVASCRIPTS -->
                    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
                    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
                    <script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
                    <script src="vendor/autosize/autosize.min.js"></script>
                    <script src="vendor/selectFx/classie.js"></script>
                    <script src="vendor/selectFx/selectFx.js"></script>
                    <script src="vendor/select2/select2.min.js"></script>
                    <script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
                    <script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
                    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
                    <!-- start: CLIP-TWO JAVASCRIPTS -->
                    <script src="assets/js/main.js"></script>
                    <!-- start: JavaScript Event Handlers for this page -->
                    <script src="assets/js/form-elements.js"></script>
                    <script>
                        jQuery(document).ready(function() {
                            Main.init();
                            FormElements.init();
                        });
                    </script>
                    <!-- end: JavaScript Event Handlers for this page -->
                    <!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>