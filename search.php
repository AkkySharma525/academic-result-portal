<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 shadow mx-auto" style="max-width:500px;">
        <h4 class="text-center mb-3">Search Student Result</h4>

        <form method="GET" action="result.php">
            <input type="text" name="studentid" class="form-control mb-3" placeholder="Enter Student ID" required>
            <button class="btn btn-primary w-100">Search</button>
        </form>
    </div>

</div>

</body>
</html>