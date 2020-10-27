<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "db";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' . mysql_error());
}

mysqli_select_db($con, 'parking-street-test');



?>