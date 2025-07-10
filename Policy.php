<?php
include 'partials/header.php'
?>



<!-- Policy ----------------------------------------------------------------------------------------------------- -->

    <Section class="PolicyPrivacy">
        <div class="contents">
            <h1>Privacy and Policy</h1>
            <p>Effective Date: [Insert Date]

                Thank you for visiting Volunteer Connect ("we," "us," or "our") website. This Privacy Policy explains how we collect, use, and disclose information obtained through the use of our website. We are committed to protecting your privacy and ensuring the security of any personal information you provide to us.<br>
                
                <br>Information We Collect:
                1.1 Personal Information:<br>
                We may collect personal information that you voluntarily provide to us when you register as a volunteer on our website or communicate with us through our contact forms or email. This information may include your name, email address, phone number, and any other information you choose to provide.<br>
                
                <br> 1.2 Non-Personal Information:
                We may automatically collect certain non-personal information when you visit our website, such as your IP address, browser type, referring website, pages visited, and the date and time of your visit. This information is used to analyze trends, administer the website, track user movements, and gather demographic information.<br>
                
                <br>Use of Information:
                2.1 Personal Information:<br>
                We may use your personal information to:<br>
                Facilitate your volunteer registration and participation in our programs.<br>
                Communicate with you regarding your volunteer activities, updates, and related matters.<br>
                Respond to your inquiries and provide support.<br>
                Improve and customize our website and services.<br>
                Comply with legal obligations and enforce our policies.<br>
                
                <br>2.2 Non-Personal Information:
                Non-personal information may be used for analytical purposes, website administration, and to improve our services and user experience.<br>
                
                <br> Disclosure of Information:
                3.1 Service Providers:<br>
                We may disclose your personal information to trusted third-party service providers who assist us in operating our website, managing our programs, or providing related services. These service providers are obligated to protect your personal information and are prohibited from using it for any other purpose.<br>
                
                <br> 3.2 Legal Compliance:
                We may disclose your information as required by law, regulation, legal process, or governmental request.<br>
                
                <br> 3.3 Business Transfers:
                In the event of a merger, acquisition, or sale of our organization or assets, your personal information may be transferred to the relevant third party as part of the transaction.<br>
                
                <br>Data Security:
                We have implemented appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, no data transmission or storage system can be guaranteed to be 100% secure. Therefore, we cannot guarantee the absolute security of your information.<br>
                
                <br> Links to Third-Party Websites:
                Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these websites. We encourage you to review the privacy policies of any third-party websites you visit.<br>
                
                <br>Children's Privacy:
                Our website is not intended for children under the age of 13. We do not knowingly collect personal information from children under the age of 13. If you believe we have inadvertently collected personal information from a child under 13, please contact us, and we will promptly delete the information.<br>
                
                <br>Changes to this Privacy Policy:
                We reserve the right to modify or update this Privacy Policy at any time. Any changes will be effective immediately upon posting the updated Privacy Policy on our website. By continuing to use our website, you consent to the updated Privacy Policy.<br>
                
                <br> Contact Us:
                If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at [insert contact information].<br>
                
                <br> By using our website, you acknowledge that you have read and understood this Privacy Policy and agree to the collection, use, and disclosure of your information as described herein.
                
                <br> Note: This is a general template for a Privacy Policy and may need to be tailored to meet the specific requirements<br>
                
                <br> Acceptance of Terms
                These Terms and Conditions ("Agreement") govern your use of the Volunteer Connect website ("Website") and all related services provided by [Your Organization] ("Organization"). By accessing or using the Website, you agree to be bound by this Agreement. If you do not agree with these terms, you should not use the Website.<br>
                
                <br>User Eligibility
                The Website is available for use by individuals who are at least 18 years old or are accessing the Website under the supervision of a parent or legal guardian. By using the Website, you represent and warrant that you meet these eligibility requirements.<br>
                
                <br> Volunteer Connect Platform
                The Volunteer Connect platform serves as an intermediary between volunteers and organizations seeking volunteers. The Organization does not guarantee the accuracy, completeness, or reliability of any volunteer information or opportunities listed on the Website. Users are responsible for verifying the authenticity and suitability of any volunteer opportunities before engaging in any activities.<br>
                
                <br>User Responsibilities
                Users of the Website agree to:<br>
                
                <br>4.1 Provide accurate and up-to-date information during the registration process.
                4.2 Abide by all applicable laws and regulations while using the Website.<br>
                4.3 Respect the privacy and rights of other users and organizations.<br>
                4.4 Take responsibility for their own actions and interactions with other users and organizations.<br></p>
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