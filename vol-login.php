<?php
require 'config/database.php';

if (isset($_POST["login"])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validation
    if (!$email || !$password) {
        echo "<script>alert('Please Enter Email, and Password');</script>";
        echo "<script>{ window.location.href = 'index.php'; };</script>";
        exit();
    } else {
        // Retrieve user data from the database based on the provided email
        $user_query = "SELECT * FROM users WHERE email = '$email'";
        $user_result = mysqli_query($connection, $user_query);

        if (mysqli_num_rows($user_result) === 1) {
            $user_data = mysqli_fetch_assoc($user_result);
            $db_password = $user_data['password'];
            // Verify the provided password against the hashed password stored in the database
            if (password_verify($password, $db_password)) {
                
                // Password is correct, create a session for the logged-in user
                $_SESSION['user_id'] = $user_data['id'];
                if ($user_data['user_type'] == 'Volunteer') {
                    $_SESSION['user_is_Volunteer'] = true;
                }
                // Redirect to the dashboard for the logged-in user
                header('location: ' . ROOT_URL . 'dashboard/dashboard.volunteer.php');
                exit();
            } else {
                // Invalid password
                echo "<script>alert('Invalid Password');</script>";
                echo "<script>{ window.location.href = 'index.php'; };</script>";
                exit();
            }
        } else {
            // Email not found
            echo "<script>alert('Email not found');</script>";
            echo "<script>{ window.location.href = 'index.php'; };</script>";
            exit();
        }
    }
} else {
    header('location: ' . ROOT_URL . 'index.php');
    die();
}
?>
