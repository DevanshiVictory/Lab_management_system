<?php
session_start();
include 'db_connection.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $userType = $_POST['user_type']; // Get user type from login form

    // Define table or column names dynamically
    $table = ($userType === 'staff') ? "staff_users" : "{$userType}_users";

    // Query database
    $query = "SELECT * FROM $table WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header("Location: dashboard.php?type=$userType"); // Redirect based on user type
            exit();
        } else {
            $_SESSION['error'] = "Invalid password!";
        }
    } else {
        $_SESSION['error'] = "User not found!";
    }
}

header("Location: login.php?type=$userType");
exit();
?>
