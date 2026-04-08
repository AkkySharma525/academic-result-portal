<?php
session_start();

if(!isset($_SESSION['studentid'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Result Management System</span>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">

    <h3 class="text-center mb-4">
        Welcome <?php echo $_SESSION['studentid']; ?>
    </h3>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card text-center p-3 shadow">
                <h5>Search Result</h5>
                <a href="search.php" class="btn btn-primary mt-2">Open</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center p-3 shadow">
                <h5>Add Result</h5>
                <a href="form.php" class="btn btn-success mt-2">Open</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center p-3 shadow">
                <h5>Upload PDF</h5>
                <a href="upload.php" class="btn btn-warning mt-2">Open</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center p-3 shadow">
                <h5>Download Excel</h5>
                <a href="class_results.php" class="btn btn-info mt-2">Download</a>
            </div>
        </div>

    </div>

</div>

</body>
</html>