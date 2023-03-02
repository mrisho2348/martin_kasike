<?php
$host = "localhost";
$username = "root";
$passsword = "";
$dbname = "videoupload";
$conn = mysqli_connect($host,$username,$passsword,$dbname);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error($conn));
}


?>