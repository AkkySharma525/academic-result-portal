<?php
include 'db.php';

if(isset($_GET['studentid'])){

    $id = $_GET['studentid'];

    $sql = "SELECT * FROM Results WHERE StudentID='$id'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h3 class="text-center mb-4">Student Result</h3>

    <table class="table table-bordered table-striped">
        <tr><th>Field</th><th>Value</th></tr>

        <tr><td>Student ID</td><td><?php echo $row['StudentID']; ?></td></tr>
        <tr><td>Name</td><td><?php echo $row['Name']; ?></td></tr>
        <tr><td>Semester</td><td><?php echo $row['Semester']; ?></td></tr>
        <tr><td>Subject1</td><td><?php echo $row['Subject1']; ?></td></tr>
        <tr><td>Subject2</td><td><?php echo $row['Subject2']; ?></td></tr>
        <tr><td>Total</td><td><?php echo $row['TotalMarks']; ?></td></tr>
        <tr><td>Percentage</td><td><?php echo $row['Percentage']; ?>%</td></tr>
        <tr><td>Class</td><td><?php echo $row['Class']; ?></td></tr>

    </table>

</div>

</body>
</html>

<?php
    } else {
        echo "No result found!";
    }
}
?>