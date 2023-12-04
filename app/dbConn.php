<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "test";

//$conn = mysqli_connect($host,$user,$password,$database);
$conn = new mysqli($host,$user,$password,$database);
if ($conn->connect_error) {
    die("Connection Failed");
}else {
   // echo "successfully connected with database";
}

?>