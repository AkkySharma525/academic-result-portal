<?php
session_start();
include 'db.php';

$id = $_POST['studentid'];
$pass = $_POST['password'];

$sql = "SELECT * FROM Users WHERE studentid='$id' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    $_SESSION['studentid'] = $id;
    header("Location: dashboard.php");
} else {
    header("Location: login.php?error=1");
}
?>