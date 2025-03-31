<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    $role = $_POST["role"];

    // Query to check user
    $sql = "SELECT * FROM users WHERE username = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (hash('sha256', $password) === $user["password"]) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["role"] = $user["role"];

            // Redirect based on role
            switch ($role) {
                case "Admin":
                    header("Location: admin_dashboard.php");
                    break;
                case "Doctor":
                    header("Location: doctor_dashboard.php");
                    break;
                case "Laboratory Technician":
                    header("Location: laboratory-technician_dashboard.php");
                    break;
                case "Pathologist":
                    header("Location: pathologist_dashboard.php");
                    break;
                case "Patient":
                    header("Location: patient_dashboard.php");
                    break;
                default:
                    header("Location: login.php");
                    break;
            }
            exit();
        } else {
            $_SESSION['error'] = "Invalid password!";
        }
    } else {
        $_SESSION['error'] = "Invalid username or role!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Pathology Laboratory</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #eaf6ff; }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            margin-top: 50px;
        }
        .form-label { font-weight: bold; }
        .btn-primary { background-color: #007bff; border: none; }
        .btn-primary:hover { background-color: #0056b3; }
        .forgot-password { text-align: center; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="login-container">
        <h3 class="text-center text-primary">Login to Pathology Laboratory</h3>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger"><?= $_SESSION['error']; ?></div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label class="form-label">Select Role:</label>
                <select name="role" class="form-control" required>
                    <option value="Admin">Admin</option>
                    <option value="Laboratory Technician">Laboratory Technician</option>
                    <option value="Pathologist">Pathologist</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Patient">Patient</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="forgot-password">
                <a href="forgot_password.php">Forgot your password?</a>
            </div>
        </form>
    </div>
</body>
</html>