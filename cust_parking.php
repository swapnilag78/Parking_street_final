<?php
session_start();
//error_reporting(0);
include("config.php");
$var3=$_SESSION['var2'];
echo "here";
//echo "<h1>" . $x . "</h2>";
echo "<h2>" . $var3 . "</h2>";

?>