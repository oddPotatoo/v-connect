<?php
include 'partials/header.php';

$sql = 'SELECT * FROM programs ORDER BY id DESC';
$all_programs = mysqli_query($connection, $sql);

?>
<!-- Home Page Pic -->
    <section class="Home_pic" >
        <div class="contents">
            <img src="./media/Picture1.png">
            <h1>Transforming Lives through Compassion</h1>
            <a href="<?=ROOT_URL?>progams1.php"><button>Programs</button></a>
        </div>
    </section>

    <!-- CONTENTS   -->
   <section class="feature">
    <div class="container">
    <h1>VOLUNTEER CONNECT FEATURED VOLUNTEER EVENTS</h1>
    <p>Whether you're passionate about environmental conservation, social justice, education, or any other cause close to your heart, we are here to connect you with meaningful volunteer opportunities that align with your interests and skills.</p>

    <div class="compare" id="How">
        <div class="contents">
            <h1>Collaboration 
                to other platforms</h1><p>See the advantages of partnerships that can bring mutual benefits and open up new avenues for growth, innovation, and community building</p><button class="connect-b">CONNECT</button>
            <h2>And</h2>
            <img src="./media/logo1.png" style="width: auto; height: 60px;">
            <div class="org">
                <img src="./media/org1.png" style="width: auto; height: 80px;">
                <img src="./media/org2.png" style="width: auto; height: 80px;">
                <img src="./media/org3.png" style="width: auto; height: 80px;">
            </div>
    
        </div>

    </div>
   
            </div>

    <div class="card-container">
    <?php
    $counter = 0; // Initialize the counter
    while ($post = mysqli_fetch_assoc($all_programs)) :
        if ($counter >= 2) {
            break; // Break the loop after displaying two programs
        }
        $counter++;
    ?>
        <div class="Programs" id="Programs">
            <div class="card" onclick="showProgramDetails(<?php echo $row['id']; ?>)">
            <img src="./program-image/<?= $post['program_image']; ?>" class="pic2" alt="..." style="width: 400px; height: 590px;">
                <h1><?php echo $post['Program']; ?></h1>
                <div class="card-body">
                    <h2><?php echo $post['Program']; ?></h2>
                    <p><?php echo $post['orgName']; ?></p>
                    <img src="./media/location.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['date']; ?></p>
                    <img src="./media/calendar.png" style="width: auto; height: 33px;">
                    <p><?php echo $post['time']. '-' . $post['time1']; ?></p>
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
        </div>
        <?php endwhile ?>
    </div>

</section>

    <!-- FOOTER IN THE HOME PAGE -->

   
    <section class="Discover">
        <div class="contents">
            <a href= "<?= ROOT_URL?>progams1.php"><button > Discover Programs</button></a>
            <img src="./media/Picture3.png" >
        </div>
    </section>
    <!-- border in mobile -->
   <img src="./media/border.png" alt="" id="border12">
   <img src="./media/border.png" alt="" id="border13"> 
   <img src="./media/border.png" alt="" id="border14">


<?php
include 'partials/footer.php'
?>

</body>
</html>