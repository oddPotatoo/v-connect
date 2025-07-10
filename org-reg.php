<?php
require 'config/database.php';

if (isset($_POST["sign-up1"])) {
    $username = filter_var($_POST['username1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL);
    $password = filter_var($_POST['password1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $organization = ($_POST['user_type1']);

    // Validation
    if (!$username) {
        $error_msg = "Please Enter the Name of your Organization";
    } elseif (!$email) {
        $error_msg = "Please Enter a Valid Organization Email";
    } elseif (strlen($password) < 8 || strlen($confirmpassword) < 8) {
        $error_msg = "Password should be at least 8 characters";
    } else {
        if ($password !== $confirmpassword) {
            $error_msg = "Passwords do not match";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Check if organization email already exists
            $org_check_query = "SELECT * FROM users WHERE email = '$email'";
            $org_check_result = mysqli_query($connection, $org_check_query);
            if (mysqli_num_rows($org_check_result) > 0) {
                $error_msg = "Organization Email Already exists.";
            }
        }
    }

    if (isset($error_msg)) {
        // Send error message to JavaScript to display as a pop-up alert and then redirect to the registration page
        echo "<script>alert('$error_msg'); window.location.href = 'index.php';</script>";
        exit; // Use exit to stop the execution after displaying the alert
    } else {
        // Ensure you have $hashed_password and $organization defined before this point.

        $insert_org_query = "INSERT INTO users (username, email, password, user_type)
                             VALUES ('$username', '$email', '$hashed_password', '$organization')";
        $insert_org_result = mysqli_query($connection, $insert_org_query);

        if (!mysqli_errno($connection)) {
            // Display a pop-up alert for successful registration
            echo "<script>alert('Organization Account Created Successfully.');</script>";
            // Delay the redirection for a few seconds (e.g., 3 seconds) before going to a relevant page
            echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
            exit;
        }
    }
}
?>
