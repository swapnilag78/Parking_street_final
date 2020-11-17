<?php
session_start();
//error_reporting(0);
include("config.php");
$var4=$_SESSION['varf'];
$vech=$_SESSION['vechile'];
$cust_em=$_SESSION['cust_em'];



echo "here";
//echo "<h1>" . $x . "</h2>";
echo "<h2>" . $var4 . "</h2>";
echo "<h2>" . $vech . "</h2>";
echo "<h2>" . $cust_em . "</h2>";

?>