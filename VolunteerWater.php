<?php
include 'partials/header.php';
if (isset($_SESSION['user_id']) && (isset($_SESSION['user_is_Volunteer']) || isset($_SESSION['user_is_Organization']))) {
    if (isset($_GET['id'])) {
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $query = "SELECT * FROM programs WHERE id=$id";
        $result = mysqli_query($connection, $query);
        $programs = mysqli_fetch_assoc($result);
    } else {
        header('location: ' . ROOT_URL . 'progams1.php');
        die();
    }
    // Handle the volunteer action
    if (isset($_POST['volunteer'])) {
        // Check if there are available response slots
        if ($programs['current_responses'] < $programs['response_limit']) {
            $updated_responses = $programs['current_responses'] + 1;
            $query = "UPDATE programs SET current_responses=$updated_responses WHERE id=$id";
            $result = mysqli_query($connection, $query);
    
            if ($result === false) {
                echo "Update query error: " . mysqli_error($connection);
            } else {
                // Save the user ID and program ID to the "form" table
                $user_id = $_SESSION['user_id'];
                $query = "INSERT INTO form (id, program_id) VALUES ($user_id, $id)";
                $result = mysqli_query($connection, $query);
    
            echo '<script>alert("Volunteered Successfully!");</script>';
            echo "<script>{ window.location.href = 'progams1.php'; };</script>";
            exit();
                }
            
        }else{
            echo '<script>alert("The response limit for this program has been reached. Thank you for your interest!");</script>';
            echo "<script>{ window.location.href = 'progams1.php'; };</script>";
            exit();
        }
    }
    $isClosed = $programs['current_responses'] >= $programs['response_limit'];
?>
<head><link rel="stylesheet" href="<?=ROOT_URL?>css/VolunteerWater.css"></head>
    <!-- ALL CONTENTS -->

<div class="centerAll">

   <!-- Card Title program -->
   <div class="title-background">
    <div class="contents">
        <img src="./media/programs-title.png" style="width: auto; height: 100px;"> 
        <h1><?= $programs['Program'] ?></h1>
    </div>
</div>
   

<!-- Card Picture and details -->
<section class="card1">
    <div class="contents">
        <img src="./program-image/<?= $programs['program_image'] ?>"style="width: 350px; height: 250px;" id="picWater"> 
        </div>
        
            <div class="card-body1">
                <div class="contents">
                <?php if ($isClosed) : ?>
                    <button type="button">CLOSED</button>
                <?php else : ?>
                    <button type="submit">OPEN</button>
                <?php endif; ?>

                <p><?= $programs['location'] ?></p>
                <img src="./media/location.png" style="width: auto; height: 20px;">
                <p><?= $programs['date'] ?></p>
                <img src="./media/calendar.png" style="width: auto; height: 20px;">
                <p><p><?php echo date("g:i A", strtotime($programs['time']));?> - <?php echo date("g:i A", strtotime($programs['time1']));?></p></p>
                <img src="./media/clock.png" style="width: auto; height: 20px;">
                <p><?= $programs['orgName'] ?></p>
                <img src="./media/group.png" style="width: auto; height: 20px;" >
                <p><?= $programs['firstName'] ?> <?= $programs['lastName'] ?></p>
                <img src="./media/Name.png" style="width: auto; height: 20px;" >
                <p><?= $programs['contact'] ?></p>
                <img src="./media/phone.png" style="width: auto; height: 20px;" >
                <p><?= $programs['email'] ?></p>
                <img src="./media/email.png" style="width: auto; height: 20px;" >
                <?php
                if (isset($_SESSION['user_id']) && isset($_SESSION['user_is_Volunteer'])) {
                ?>
                <form method="post">
                    <button type="submit" name="volunteer" id="schedule">VOLUNTEER</button>
                </form>
                <?php
                }
                ?>
                <h4><?= $programs['response_limit'] - $programs['current_responses'] ?> more volunteers needed</h4>
                </div>
                <div class="container-bar1">
                  <div class="progress-container">
                  <div class="progress-bar">
                  <span style="width: <?= ($programs['current_responses'] / $programs['response_limit']) * 100 ?>%;"></span>
                    </div>
                  </div>
              </div>
              </div>
        </div>
</section>
    

<!-- Card Rules and Procedures-->
<section class="rules">
    <div class="contents">
    <h1 id="age">VOLUNTEERS MUST BE <?= $programs['ageReq'] ?> YRS OLD AND ABOVE</h1>
        <p><?= $programs['Scope'] ?></p>
        <strong>
            Skills and Qualifications: </strong>
            <p> <?= $programs['skills'] ?> </p>
        
        </div>    
</section>
</div>   
<?php include 'partials/footer.php' ?>
<?php }
   else {
    header('location: ' .ROOT_URL . 'index.php');
    die();
   }
   ?>