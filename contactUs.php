<?php
include 'partials/header.php'
?>
<head><link rel="stylesheet" href="css/contactUs.css"></head>
<!-- CONTACT US ----------------------------------------------------------------------------------------------------- -->

    <Section class="ContactUs">
        <div class="contents">
            <h1>Contact Us</h1>
            <p>Thank you for your interest in volunteering with us! We're excited to have you join our team and make a positive impact in our community. If you have any questions, need further information, or would like to get involved, please don't hesitate to reach out to us. Our dedicated team is here to assist you.<br>

                <br>General Inquiries:<br>
                For general inquiries about volunteering opportunities, our organization, or any other questions you may have, please contact us at:<br>
                
                <br>Email: [insert email address]
                Phone: [insert phone number]<br>
                Office Hours: [insert office hours]<br>
                
                <br> Volunteer Recruitment:
                If you're interested in becoming a volunteer and would like to discuss available positions or the application process, please contact our Volunteer Recruitment team:<br>
                
                <br>Email: [insert email address]
                Phone: [insert phone number]<br>
                Office Hours: [insert office hours]<br>
                
                <br>Technical Support:
                For technical support or assistance with the volunteer connect website, please contact our Technical Support team:<br>
                
                <br>Email: [insert email address]
                Phone: [insert phone number]<br>
                Office Hours: [insert office hours]<br>
                
                <br>Media and Press Inquiries:
                For media or press inquiries, please contact our Communications team:<br>
                
                <br>Email: [insert email address]
                Phone: [insert phone number]<br>
                Office Hours: [insert office hours]<br>
                
                <br>Social Media:
                You can also connect with us on social media to stay updated with the latest news, events, and volunteer opportunities:<br>
                
                <br>Facebook: [insert Facebook page URL]
                Twitter: [insert Twitter handle]<br>
                Instagram: [insert Instagram handle]<br>
                
                <br>We appreciate your interest in volunteering and making a difference in our community. Our team will respond to your inquiries as soon as possible. Thank you for your patience and support!</p>
        </div>

    </Section>

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