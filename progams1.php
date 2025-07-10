<?php
include 'partials/header.php';
$sql = 'SELECT * FROM programs ORDER BY id DESC';
$all_programs = mysqli_query($connection, $sql);
?>

<head>
<link rel="stylesheet" href="../Volunteer-Connect/css/style-program2.css">
</head>
   
<div class="title">
    <h2>VOLUNTEER TRAINING PROGRAMS</h2>
</div>

<section class="Allcards">
<?php while ($post = mysqli_fetch_assoc($all_programs)) : ?>
    <div class="Programs" id="Programs">
            <div class="card" onclick="showProgramDetails(<?php echo $post['id']; ?>)">
                <img src="./program-image/<?= $post['program_image']; ?>" class="pic2" alt="..." style="width: 400px; height: 590px;">
                <h1><?php echo $post['Program']; ?></h1>
                <div class="card-body">
                    <h2><?php echo $post['Program']; ?></h2>
                    <p><?php echo $post['location']; ?></p>
                    <img src="./media/location.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['date']; ?></p>
                    <img src="./media/calendar.png" style="width: auto; height: 33px;">
                    <p><?php echo date("g:i A", strtotime($post['time']));?> - <?php echo date("g:i A", strtotime($post['time1']));?></p>
                    <img src="./media/clock.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['firstName'] . ' ' . $post['lastName']; ?></p>
                    <img src="./media/group.png" style="width: auto; height: 35px;">
                    <div class="container-bar">
                        <div class="progress-container">
                            <div class="progress-bar">
                            <span style="width: <?= ($post['current_responses'] / $post['response_limit']) * 100 ?>%;"></span>
                            </div>
                        </div>
                    </div>
                    <h4><?= $post['response_limit'] - $post['current_responses'] ?> more volunteers needed</h4>
                </div>
            </div>
    </div>
    <?php endwhile ?>
</section>

<?php include 'partials/footer.php' ?>
<?php
if (isset($_SESSION['user_id']) && (isset($_SESSION['user_is_Volunteer']) || isset($_SESSION['user_is_Organization']))) {
    ?>
<script>
        function showProgramDetails(id) {
            // Redirect the user to another PHP file with the program ID as a query parameter
            window.location.href = "VolunteerWater.php?id=" + id;
        }
    </script>
</body>
</html>
<?php }
   else {
    header('location: ' .ROOT_URL . 'index.php');
    die();
   }
   ?>
