<?php

session_start();

$conn= mysqli_connect('localhost', 'root');
if($conn)
{
   echo "connection successful";
   $extra="index.php";
   $host=$_SERVER['HTTP_HOST'];
   $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
   header("location:http://$host$uri/$extra");
}
else{
   echo "connection unsuccessful";
}

mysqli_select_db($conn, 'db');


$name_bus= $_POST['business_n'];
$bus_add=$_POST['address'];
$bus_e=$_POST['email'];
$bus_con=$_POST['phne'];
$admin=$_POST['admin_user'];
$admin_pass=$_POST['pass_w'];
$valet_parking=$_POST['valet_park'];
$floor_num=$_POST['floor_number'];
$num_lots=$_POST['number_lots'];
$parking_rate=$_POST['parking_rate'];

$q= "select * from business_table where bus_name='$name_bus' and bus_address='$bus_add' and bus_contact_num='$bus_con' and bus_email='$bus_e' and admin_password='$admin_pass'  and admin_username='$admin' and bus_valet='$valet_parking' and parking_rate='$parking_rate'";


   $qy= "insert into business_table(bus_name, bus_address, bus_contact_num, bus_email, admin_username, admin_password, bus_valet, parking_rate) values ('$name_bus', '$bus_add', '$bus_con' ,'$bus_e', '$admin', '$admin_pass', '$valet_parking', '$parking_rate')";
   $valu="insert into total_lot_table (floor_num, total_lot) values ('$floor_num', '$num_lots')";
   mysqli_query($conn, $qy);
   mysqli_query($conn, $valu);
?>
