<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center mb-4">Patient Dashboard</h2>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Test Results</th>
                    <th>Appointment Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($patients)): ?>
                    <?php foreach ($patients as $patient): ?>
                        <tr>
                            <td><?= htmlspecialchars($patient['id']) ?></td>
                            <td><?= htmlspecialchars($patient['name']) ?></td>
                            <td><?= htmlspecialchars($patient['age']) ?></td>
                            <td><?= htmlspecialchars($patient['gender']) ?></td>
                            <td><?= htmlspecialchars($patient['test_results']) ?></td>
                            <td><?= htmlspecialchars($patient['appointment_date']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">No patient records found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>