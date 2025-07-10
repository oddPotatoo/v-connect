<?php
include 'partials/header.php'
?>
<head><link rel="stylesheet" href="css/howitworks.css"></head>
     <!-- How it WOrks -->
     <section class="How">
     <h1 class="H1">How to Volunteer Online</h1>
        <div class="container-how">
            <p>
                Volunteer Connect serves as the ultimate platform for individuals, groups, and organizations to discover and initiate programs, offering a comprehensive solution for finding and engaging in meaningful volunteer opportunities.
            </p>
            <h4>
                Watch the demonstration Video.
            </h4>
            <img src="./media/earth.png">
        </div>

        <div class="here">
            <h1>Here's how it works</h1>
            <div class="items">
                <div class="details">
                <img src="./media/note.png" class="img1">
                <p class="p1">Ensuring a smooth and hassle-free registration experience</p>
                </div>
                <div class="details">
                <img src="./media/heart.png" class="img2">
                    <p>Creating a collaborative environment to address social needs</p>
                </div>
                <div class="details">
                    <img src="./media/speaker.png" class="img3">
                    <p class="p3">Make a profound and far-reaching impact</p>
                </div>
            </div>
        </div>
</section>

<?php
include 'partials/footer.php'
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./java/app.js"></script>
<script src="./java/app1.js"></script>

<script>
      let subMenu1 = document.getElementById("subMenu1");

function toggleMenu1(){
  subMenu1.classList.toggle("open-menu1");
}


</script>
<script>
let register = document.getElementById("register");

function toggleMenu2(){
  register.classList.toggle("open-menu2");
}
</script>
<script>
let volunteer = document.getElementById("volunteer1");
    
function toggleMenu3(){
  volunteer.classList.toggle("open-menu3");
  organization.classList.remove("open-menu4");
  register.classList.remove("open-menu2");
}
function remove1(){
    volunteer.classList.toggle("open-menu3");
}
</script>
<script>
    let organization = document.getElementById("organization1");
        
    function toggleMenu4(){
      organization.classList.toggle("open-menu4");
      volunteer.classList.remove("open-menu3");
      register.classList.remove("open-menu2");
    
    }
    function remove2(){
    organization.classList.toggle("open-menu4");
}
 
    </script>
 <!-- js code -->
 
<script>
    
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>