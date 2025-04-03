<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Admin') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #eaf6ff;
        }
        .dashboard-container {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            width: 250px;
            background: white;
            padding: 20px;
            box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .nav-link {
            font-weight: bold;
            color: #007bff;
        }
        .nav-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="sidebar">
        <h4 class="text-primary">Admin Panel</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Manage Users</a></li>
            <li class="nav-item"><a class="nav-link" href="#">View Reports</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            <li class="nav-item"><a class="nav-link text-danger" href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="content">
        <h2 class="text-primary">Welcome, Admin</h2>
        <p>Manage your laboratory system here.</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h5>Total Users</h5>
                    <p>50</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h5>Reports Generated</h5>
                    <p>120</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h5>Pending Requests</h5>
                    <p>8</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
