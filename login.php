<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="height:100vh;">

<div class="card p-4 shadow" style="width: 350px;">
    
    <h3 class="text-center mb-3">Student Login</h3>
    
    <?php
    if(isset($_GET['error'])){
        echo "<div class='alert alert-danger text-center'>Invalid Login!</div>";
    }
    ?>

    <form method="POST" action="login_process.php">

        <div class="mb-3">
            <label class="form-label">Student ID</label>
            <input type="text" name="studentid" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100">Login</button>

    </form>

</div>

</body>
</html>