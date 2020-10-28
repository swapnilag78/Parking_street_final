<?php

session_start();

$conn= mysqli_connect('localhost', 'root');
if($conn)
{
   echo "connection successful";
}
else{
   echo "connection unsuccessful";
}

mysqli_select_db($conn, 'db');


$name_bus= $_POST['business_n'];
$bus_add=$_POST['address'];
$bus_e=$_POST['email'];

$q= "select * from business_table where bus_name='$name_bus' or bus_address='$bus_add' or bus_email='$bus_e'  ";

$res= mysqli_query($conn, $q);

$num = mysqli_num_rows($res);

if($num==1)
   {
      echo "duplicate data";
   }

else{
   $qy= "insert into business_table(bus_name, bus_address, bus_email) values ('$name_bus', '$bus_add', '$bus_e')";
   mysqli_query($conn, $qy);
}
