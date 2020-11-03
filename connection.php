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

$q= "select * from business_table where bus_name='$name_bus' and bus_address='$bus_add' and bus_contact_num='$bus_con' and bus_email='$bus_e' and admin_password='$admin_pass'  and admin_username='$admin'  ";

$res= mysqli_query($conn, $q);

$num = mysqli_num_rows($res);

if($num==1)
   {
      echo "duplicate data";
   }
else{
   $qy= "insert into business_table(bus_name, bus_address, bus_contact_num, bus_email, admin_username, admin_password) values ('$name_bus', '$bus_add', '$bus_con' ,'$bus_e', '$admin', '$admin_pass')";
   mysqli_query($conn, $qy);
}
