<?php
include 'partials/header.php'
?>

<!-- TERMS----------------------------------------------------------------------------------------------------- -->
<head><link rel="stylesheet" href="css/TermsCondition.css"></head>
    <Section class="TermsCondition">
        <div class="contents">
            <h1>Terms and Conditions</h1>
            <p>Acceptance of Terms<br>
                These Terms and Conditions ("Agreement") govern your use of the Volunteer Connect website ("Website") and all related services provided by [Your Organization] ("Organization"). By accessing or using the Website, you agree to be bound by this Agreement. If you do not agree with these terms, you should not use the Website.<br>
                
                <br>User Eligibility
                The Website is available for use by individuals who are at least 18 years old or are accessing the Website under the supervision of a parent or legal guardian. By using the Website, you represent and warrant that you meet these eligibility requirements.<br>
                
                <br>Volunteer Connect Platform
                The Volunteer Connect platform serves as an intermediary between volunteers and organizations seeking volunteers. The Organization does not guarantee the accuracy, completeness, or reliability of any volunteer information or opportunities listed on the Website. Users are responsible for verifying the authenticity and suitability of any volunteer opportunities before engaging in any activities.<br>
                
                <br> User Responsibilities
                Users of the Website agree to:<br>
                
                <br>4.1 Provide accurate and up-to-date information during the registration process.
                4.2 Abide by all applicable laws and regulations while using the Website.<br>
                4.3 Respect the privacy and rights of other users and organizations.<br>
                4.4 Take responsibility for their own actions and interactions with other users and organizations.<br>
                
                <br>Intellectual Property
                All content on the Website, including text, graphics, logos, and images, is the property of the Organization and is protected by intellectual property laws. Users may not reproduce, distribute, modify, or create derivative works from any content without the prior written consent of the Organization.<br>
                
                <br> Privacy
                The Organization respects the privacy of its users. By using the Website, you agree to the collection, use, and disclosure of personal information as outlined in the Organization's Privacy Policy.<br>
                
                <br> Limitation of Liability
                The Organization shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of or related to the use or inability to use the Website or the volunteer opportunities listed on the Website. Users assume all risks associated with their use of the Website.<br>
                
                <br>Indemnification
                Users agree to indemnify and hold the Organization, its affiliates, and their respective officers, directors, employees, and agents harmless from and against any claims, losses, liabilities, expenses, damages, or demands arising out of or in connection with the user's use of the Website.<br>
                
                <br>Modification of Terms
                The Organization reserves the right to modify or amend these Terms and Conditions at any time. Users will be notified of any changes, and continued use of the Website after such notification constitutes acceptance of the modified terms.<br>
                
                <br>Termination
                The Organization reserves the right to suspend or terminate a user's access to the Website at any time, without prior notice or liability, for any reason deemed appropriate by the Organization.<br>
                
                <br>Governing Law
                This Agreement shall be governed by and construed in accordance with the laws of [Jurisdiction]. Any disputes arising out of or in connection with this Agreement shall be resolved exclusively through the courts of [Jurisdiction].<br></p>
        </div>

    </Section>

    <?php
include 'partials/footer.php'
?>





<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="./java/app.js"></script>
<script src="./java/app1.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".input", {
        strings:["Ma. Angela Vizcarra","Heartfelt kindness."," Boundless empathy.","Unwavering compassion."],
        typeSpeed: 60,
        backSpeed: 60,
        loop:true
    });
</script> 
<script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right = "0"
    }
    function closemenu(){
        sidemenu.style.right = "-200px"
    }
</script>

<script>
const scriptURL = 'https://script.google.com/macros/s/AKfycbxuUODHOnZfbOz-73xQqIgBagcmxMNFwNnXIODCxKYVLfztiztInf-4M3Ayab0A0u96/exec'
const form = document.forms['submit-to-google-sheet']
const msg = document.getElementById("msg")

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
    .then(response => {
        msg.innerHTML = "Message sent succesfully"
        setTimeout(function(){
            msg.innerHTML =""
        },5000)
        form.reset()
    })
    .catch(error => console.error('Error!', error.message))
})
</script>

<script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab")
        }
        const icon = document.querySelector('.icon');
        const search = document.querySelector('.searchC');

        icon.onclick = function(){
            search.classList.toggle('active');
        }

        var swiper = new Swiper(".mySwiper", {
pagination: {
  el: ".swiper-pagination",
},
});
const spans = document.querySelectorAll('.progress-bar span');

spans.forEach((span) => {
span.style.width = span.dataset.width;
span.innerHTML = span.dataset.width;
});

document.addEventListener('scroll',()=>{
    const header = document.querySelector('header');
    const scrollable = document.documentElement.scrollHeight - window.innerHeight;
     if(window.scrollY > 0 ){
        header.classList.add('scrolled');
     }else{
        header.classList.remove('scrolled');
     }

    
})

</script> -->
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