<?php
require 'config/database.php';

if (isset($_POST["submit1"])) {
    $author_id = $_SESSION['user_id'];
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $orgName = filter_var($_POST['orgName'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $first = filter_var($_POST['first'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $last = filter_var($_POST['last'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $contact = filter_var($_POST['contact'], FILTER_SANITIZE_NUMBER_INT);
    $response_limit = filter_var($_POST['response_limit'], FILTER_SANITIZE_NUMBER_INT);
    $date = filter_var($_POST['date']);
    $time = filter_var($_POST['time']);
    $time1 = filter_var($_POST['time1']);
    $location = filter_var($_POST['location'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $loc_Dscrptn = filter_var($_POST['loc_Dscrptn'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $program_image = $_FILES['program_image'];
    $scope = filter_var($_POST['scope'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $ageReq = filter_var($_POST['ageReq'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $skills = filter_var($_POST['skills'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // If there are no errors, proceed with uploading the image
    $time = time();
    $image_name = $time . $program_image['name'];
    $image_tmp_name = $program_image['tmp_name'];
    $image_dest = 'program-image/' . $image_name;

    $allowed_files = ['png', 'jpg', 'jpeg'];
    $extension = explode('.', $image_name);
    if (in_array($extension, $allowed_files)) {
        if ($program_image['size'] < 2000000) {
            // Move the uploaded file to the destination folder
            move_uploaded_file($image_tmp_name, $image_dest);
        } else {
            echo "<script>alert('File size is too big. Should be less than 2MB.');</script>";
            header("Location: StartProgram.php");
            exit();
        }
    } else {
        echo "<script>alert('File should be PNG, JPG, or JPEG only.');</script>";
        header("Location: StartProgram.php");
        exit();
    }

    $query = "INSERT INTO programs (author_id, Program, orgName, firstName, lastName, email, contact, date, time, time1, location, locDscrptn, program_image, response_limit, Scope, ageReq, skills) VALUES
    ('$author_id', '$title', '$orgName', '$first', '$last', '$email', '$contact', '$date', '$time', '$time1', '$location', '$loc_Dscrptn', '$image_name', '$response_limit', '$scope', '$ageReq', '$skills')";
    $result = mysqli_query($connection, $query);


    if (!mysqli_errno($connection)) {
        // Display a pop-up alert for successful registration
        echo "<script>alert('Program Created Successfully.');</script>";
        // Delay the redirection for a few seconds (e.g., 3 seconds) before going to index.php
        echo "<script>setTimeout(function(){ window.location.href = 'index.php'; }, 1000);</script>";
        die();
        
    }
}
?>
