<?php
include 'db.php';

$sql = "SELECT * FROM Results";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "ID: " . $row['StudentID'] . "<br>";
    echo "Name: " . $row['Name'] . "<br>";
    echo "Percentage: " . $row['Percentage'] . "<br><br>";
}
?>