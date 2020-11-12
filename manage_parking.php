<?php
session_start();
include('config.php');


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
    <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


    <style>
        .car_parking {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
            grid-gap: 15px;
            background-color: whitesmoke;
            padding: 10px;
        }

        .car_parking>div {
            background-color: green;
            text-align: center;
            padding: 30px 0;
            font-size: 40px;
        }

        .car_parking>div>img {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            height: 120px;
            width: 60px;


        }

        .item1 {
            grid-row: 1 / 2;
        }
    </style>


</head>

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




                    <div class="flex-container">
                       
                        <!-- Trigger the modal with a button -->

                        <?php $street = 1; ?>

<tr>
<td><?php
$res = mysqli_query($con,"SELECT floor_num, lot_num, parking_status from parking_lot_table");
            echo '<table border="20" style="width:100% ;" cellspacing="16" cellpadding="10" font face="Arial, Helvetica, sans-serif"  >';
            while ($row = mysqli_fetch_assoc($res)) {
				$id = $row['lot_num'];
                echo "<tr>";
				echo "<td>" . $row['floor_num'] . "</td>";
				$sql= "SELECT * FROM parking_lot_table WHERE bus_id='$street' and lot_num='$id' and parking_status='yes'";
         	    $result=mysqli_query($con,$sql);
				 $count=mysqli_num_rows($result);
				if($count==1){	
					echo "<td style=\" text-align: center;\">" . $row['lot_num'] .  "</td>";
					echo "<td  style=\"background-color : red; text-align: center;\" >" ."Booked".  "</td>";
				}
					 else{
					echo "<td style=\" text-align: center;\">" . $row['lot_num'] .  "</td>";
					echo("<td style=\"background-color : green; text-align: center; background:url(images/car_svg.jpg);\">  <button class=btn btn-success>click!</button> </td>");
					}
				
            }
            echo "</table>";

?>
</td>
</tr>

                        

                        

                    </div>

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