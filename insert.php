<?php
include 'db.php';

$sql = "INSERT INTO Results (StudentID, Name, Semester, Subject1, Subject2, TotalMarks, Percentage, Class)
VALUES ('101', 'Akshit', 1, 80, 85, 165, 82.5, 'A')";

if(mysqli_query($conn, $sql)){
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>