<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div class="container py-4">
    <h2 class="mb-4">Laboratory Management Dashboard</h2>

    <div class="row g-4">
        <!-- Appointments -->
        <div class="col-md-4">
            <a href="<?= base_url('appointments') ?>" class="text-decoration-none">
                <div class="card text-white bg-primary shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Appointments</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Sample Collection -->
        <div class="col-md-4">
            <a href="<?= base_url('sample-collection') ?>" class="text-decoration-none">
                <div class="card text-white bg-success shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Sample Collection</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Test Status / Processing -->
        <div class="col-md-4">
            <a href="<?= base_url('test-status') ?>" class="text-decoration-none">
                <div class="card text-white bg-warning shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Test Status / Processing</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Billing & Invoices -->
        <div class="col-md-4">
            <a href="<?= base_url('billing') ?>" class="text-decoration-none">
                <div class="card text-white bg-danger shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Billing & Invoices</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Inventory Management -->
        <div class="col-md-4">
            <a href="<?= base_url('inventory') ?>" class="text-decoration-none">
                <div class="card text-white bg-info shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Inventory Management</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Staff Management -->
        <div class="col-md-4">
            <a href="<?= base_url('staff') ?>" class="text-decoration-none">
                <div class="card text-white bg-secondary shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Staff Management</h5>
                    </div>
                </div>
            </a>
        </div>

        <!-- Settings / Configuration -->
        <div class="col-md-4">
            <a href="<?= base_url('settings') ?>" class="text-decoration-none">
                <div class="card text-white bg-dark shadow h-100">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <h5 class="card-title mb-0">Settings / Configuration</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

</body>
</html>
