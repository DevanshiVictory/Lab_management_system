<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laboratory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #1d3557, #457b9d);
            color: #f1faee;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            background-color: #1d3557;
        }

        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-card {
            background-color: #f8f9fa;
            color: #212529;
            border-radius: 1rem;
            padding: 40px;
            width: 100%;
            max-width: 900px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .dashboard-grid a {
            padding: 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            text-align: center;
        }

        .dashboard-grid a:hover {
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #1d3557;
            color: #f1faee;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark px-3">
        <a class="navbar-brand" href="#">LabSys</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?= base_url('/logout') ?>">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="dashboard-card text-center">
            <h2>Welcome to the Laboratory Management System</h2>
            <p class="mt-3">Choose your action below</p>
            <div class="dashboard-grid">
                <a href="<?= base_url('/patients') ?>" class="btn btn-outline-primary">Manage Patients</a>
                <a href="<?= base_url('/appointments') ?>" class="btn btn-outline-info">Appointments</a>
                <a href="<?= base_url('/sample-collection') ?>" class="btn btn-outline-warning">Sample Collection</a>
                <a href="<?= base_url('/tests') ?>" class="btn btn-outline-secondary">Lab Tests</a>
                <a href="<?= base_url('/processing') ?>" class="btn btn-outline-dark">Test Processing</a>
                <a href="<?= base_url('/reports') ?>" class="btn btn-outline-success">Reports</a>
                <a href="<?= base_url('/billing') ?>" class="btn btn-outline-danger">Billing</a>
                <a href="<?= base_url('/inventory') ?>" class="btn btn-outline-primary">Inventory</a>
                <a href="<?= base_url('/staff') ?>" class="btn btn-outline-info">Staff Management</a>
                <a href="<?= base_url('/settings') ?>" class="btn btn-outline-dark">Settings</a>
            </div>
        </div>
    </div>

    <footer>
        &copy; <?= date('Y') ?> Laboratory Management System. All rights reserved.
    </footer>

</body>
</html>
