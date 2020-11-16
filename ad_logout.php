<?php
session_start();
include('config.php');
$_SESSION['login']=="";
date_default_timezone_set('Asia/Kolkata');
//mysqli_query($con,"UPDATE doctorslog  SET logout = '$ldate' WHERE uid = '".$_SESSION['id']."' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>
