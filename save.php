<?php
include 'db.php';

$studentid = $_POST['studentid'];
$name = $_POST['name'];
$semester = $_POST['semester'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];

$total = $sub1 + $sub2;
$percentage = $total / 2;

if($percentage >= 75) $class = "A";
else if($percentage >= 60) $class = "B";
else $class = "C";

$sql = "INSERT INTO Results (StudentID, Name, Semester, Subject1, Subject2, TotalMarks, Percentage, Class)
VALUES ('$studentid', '$name', '$semester', '$sub1', '$sub2', '$total', '$percentage', '$class')";

if(mysqli_query($conn, $sql)){
    echo "Data saved successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>