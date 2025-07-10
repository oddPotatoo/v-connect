<?php
include 'partials/header.php'
?>
<head><link rel="stylesheet" href="css/Faqs.css"></head>
<!-- FAQs -->
    <section class="Faqs">
        <h1 class="title">Frequently Asked Questions</h1>
    
        <div class="questions-container">
            <h1 class="titles">V-Connect Basics</h1>
            <img src="./media/faqs1.png" style="width: 100px; height: 90px;" id="faqs1">
            <div class="question">
                <button>
                    <span>What is V-Connect?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Start With An Online Course.An online tutorial is probably the best way to learn JavaScript.If you're serious about learning fast, efficiently and without missing any important information, then you should consider enrolling in an online course.</p>
            </div>
    
            <div class="question">
                <button>
                    <span>How does the Volunteer Connect website facilitate connections between volunteers and organizations? </span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>I suggest taking a look at Typescript and learning some popular frontend framework (Angular, React, Vue). If you are interested in backend, take a look at Node. js.</p>
            </div>
    
            <div class="question">
                <button>
                    <span>How does the Volunteer Connect ensures the safety and credibility of both volunteers and organizations involved in the platform?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam ea odit voluptate culpa quas explicabo.</p>
            </div>
            <div class="questions-container">
            <h1 class="titles">Joining A Program</h1>
            <img src="./media/faqs2.png" style="width: 100px; height: 90px;" id="faqs2">
            <div class="question">
                <button>
                    <span>What types of volunteer programs are available through Volunteer Connect?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
            </div>
            <div class="question">
                <button>
                    <span>What are the steps involved in joining program through Volunteer Connect?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
            </div>
            <div class="question">
                <button>
                    <span>Are there any requirements or qualifications for joining a program in Volunteer Connect?</span>
                    <i class="fas fa-chevron-down d-arrow"></i>
                </button>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
            </div>
            <div class="questions-container">
                <h1 class="titles">Start a Program</h1>
                <img src="./media/faqs3.png" style="width: 100px; height: 90px;" id="faqs3">
                <div class="question">
                    <button>
                        <span>What are the initial steps and considerations for starting a program within the Volunteer Connect platform?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
                </div>
                <div class="question">
                    <button>
                        <span>Are there any specific requirements or qualifications for organizations looking to start a program on Volunteer Connect?</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
                </div>
                <div class="question">
                    <button>
                        <span>What are the strategies or resources are available within Volunteer Connect to help program organizers maximize their impact and outcomes.</span>
                        <i class="fas fa-chevron-down d-arrow"></i>
                    </button>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus corporis pariatur a maiores minus tempore magni nam beatae dolores omnis.</p>
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
  const buttons = document.querySelectorAll('button');

buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const faq = button.nextElementSibling;
        const icon = button.children[1];

        faq.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )  
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>