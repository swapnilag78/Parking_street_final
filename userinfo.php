<?php

$con=mysqli_connect('localhost', 'root');

if($con){
    echo "connection successful";
}

else{
    echo " connection unsccessful";
}


mysqli_select_db($con, 'parking-street-test');

$username=$_POST['username'];
$pass=$_POST['password'];

$query= " insert into userinfodata (username, password)
values ('$username', '$pass')";

mysqli_query($con, $query);
header('location:index.php');


$sql = "SELECT id, username FROM userinfodata";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
        echo "<br> id: ". $row["id"]. " - username: ". $row["firstname"];
    }
} else {
    echo "0 results";
}

mysqli_close($con);

?>