<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "crud_db";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    // die("something is wrong!" . mysqli_connect_error());
    die("something is wrong!");
}
?>
