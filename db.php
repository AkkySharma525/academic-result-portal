<?php
$conn = mysqli_connect("localhost", "root", "", "ResultManagement");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>