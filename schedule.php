<?php 
include 'partials/header.php'
?>

<head><link rel="stylesheet" href="css/schedule.css"></head>
    <!-- ALL CONTENTS -->

<div class="centerAll">

   <!-- Card Title program -->
   <div class="title-background">
    <div class="contents">
        <img src="./media/programs-title.png" style="width: auto; height: 100px;"> 
        <h1 id="titleCard1">FEEDING: Nutrition in Emergency Program</h1>
    </div>
</div>
   
<!-- BUTTON AND INPUTS -->
<div class="program-sched">
    <div class="contents">
        <a href="./VolunteerTraining1.php">
            <img src="./media/back.png" alt="" style="width: auto; height: 50px;">
            <h1>BACK</h1>
        </a>
        <button id="re-schedule">RE-SCHEDULE</button>
        <div class="inputs">
            <h2>Program Schedule</h2>
            <div class="dropdown" id="Month">
                <input type="text" class="textbox" placeholder="Pleace specify the date" readonly>
                <div class="option">
                    <div onclick="show('January')">January</div>
                    <div onclick="show('February')">February</div>
                    <div onclick="show('March')">March</div>
                    <div onclick="show('April')">April</div>
                    <div onclick="show('May')"> May</div>
                    <div onclick="show('June')">June</div>
                    <div onclick="show('July')">July</div>
                    <div onclick="show('September')">September</div>
                    <div onclick="show('October')">October</div>
                    <div onclick="show('Novermber')">Novermber</div>
                    <div onclick="show('December')">December</div>
                </div>
            </div>
            <div class="dropdown2" id="date1">
                <input type="text" class="textbox2"  readonly>
                <div class="option">
                    <div onclick="show2('1')">1</div>
                    <div onclick="show2('2')">2</div>
                    <div onclick="show2('3')">3</div>
                    <div onclick="show2('4')">4</div>
                    <div onclick="show2('5')">5</div>
                    <div onclick="show2('6')">6</div>
                    <div onclick="show2('7')">7</div>
                    <div onclick="show2('8')">8</div>
                    <div onclick="show2('9')">9</div>
                    <div onclick="show2('10')">10</div>
                </div>
                <p> to </p>
            </div>
            <div class="dropdown3" id="date2">
                <input type="text" class="textbox3" readonly>
                <div class="option">
                    <div onclick="show3('11')">11</div>
                    <div onclick="show3('12')">12</div>
                    <div onclick="show3('13')">13</div>
                    <div onclick="show3('14')">14</div>
                    <div onclick="show3('15')"> 15</div>
                    <div onclick="show3('16')">16</div>
                    <div onclick="show3('J7')">17</div>
                    <div onclick="show3('18')">18</div>
                    <div onclick="show3('19')">19</div>
                    <div onclick="show3('20')">20</div>
                </div>
            </div>
            <input type="submit" class="submit" onclick="submitthis()">
                <div class="terms">
                    <p class="disclaimer-text">By clicking "Submit" you agree to our <a href="#" class="orange-link"
                        onclick="showTermsPopup()">Terms of Use</a>, <a href="#" class="orange-link"
                        onclick="showPolicyPopup() ">Privacy Policy</a>, and <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Disclaimer</a></p>
  
                </div>
        </div>
    </div>
</div>  
</div>

<?php 
include 'partials/footer.php'
?>

<script src="./java/app.js"></script>
<script src="./java/app1.js"></script>
<script>
let subMenu1 = document.getElementById("subMenu1");

function toggleMenu1(){
subMenu1.classList.toggle("open-menu1");
}
</script>

<!-- CHANGES THE TITLE -->


</body>
</html>