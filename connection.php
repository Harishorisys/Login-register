<?php
$dsn = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "loginn";

$conn = new mysqli($dsn,$dbuser,$dbpassword,$dbname);
if($conn){
    // echo "connection successfull";
}
else{
    die(mysqli_error($conn));
}


?>