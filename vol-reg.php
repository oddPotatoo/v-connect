<?php
require 'config/database.php';

if (isset($_POST["sign-up"])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $volunteer = ($_POST['user_type']);

    // Validation
    if (!$username) {
        $error_msg = "Please Enter a Username";
    } elseif (!$email) {
        $error_msg = "Please Enter a Valid Email";
    } elseif (strlen($password) < 8 || strlen($confirmpassword) < 8) {
        $error_msg = "Password should be at least 8 characters";
    } else {
        if ($password !== $confirmpassword) {
            $error_msg = "Passwords do not match";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Check if username or email already exists
            $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if (mysqli_num_rows($user_check_result) > 0) {
                $error_msg = "Username or Email Already exists.";
            }
        }
    }

    if (isset($error_msg)) {
        // Send error message to JavaScript to display as a pop-up alert and then redirect to index.php
        echo "<script>alert('$error_msg'); window.location.href = 'index.php';</script>";
        exit; // Use exit to stop the execution after displaying the alert
    } else {
        // Ensure you have $hashed_password and $volunteer defined before this point.

        $insert_user_query = "INSERT INTO users (username, email, password, user_type)
                             VALUES ('$username', '$email', '$hashed_password', '$volunteer')";
        $insert_user_result = mysqli_query($connection, $insert_user_query);

        if (!mysqli_errno($connection)) {
            // Display a pop-up alert for successful registration
            echo "<script>alert('Account Created Successfully.');</script>";
            // Delay the redirection for a few seconds (e.g., 3 seconds) before going to index.php
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
            exit;
        }
           
    }
}
