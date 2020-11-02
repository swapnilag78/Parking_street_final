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


$name_em= $_POST['emp_name'];
$em=$_POST['user_name'];
$em_pass=$_POST['pass_w'];



$q= "select * from employee_table where emp_name= '$name_em' and emp_username='$em' and emp_password='$em_pass' ";

$res= mysqli_query($conn, $q);

$num = mysqli_num_rows($res);

if($num==1)
   {
      echo "duplicate data";
   }
else{
   $qy= "insert into employee_table(emp_name, emp_username, emp_password) values ('$name_em', '$em', '$em_pass')";
   mysqli_query($conn, $qy);
}
