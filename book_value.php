<?php
session_start();
//error_reporting(0);
include("config.php");
$var2=$_SESSION['var1'];
echo "here";
//echo "<h1>" . $x . "</h2>";
echo "<h2>" . $var2 . "</h2>";



?>