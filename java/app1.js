const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const sign_in_btn2 = document.querySelector("#sign-in-btn2");
const sign_up_btn2 = document.querySelector("#sign-up-btn2");
sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});
sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
sign_up_btn2.addEventListener("click", () => {
    container.classList.add("sign-up-mode2");
});
sign_in_btn2.addEventListener("click", () => {
    container.classList.remove("sign-up-mode2");
});

const sign_in_btn1 = document.querySelector("#sign-in-btn1");
const sign_up_btn1 = document.querySelector("#sign-up-btn1");
const container1 = document.querySelector("#container1");
const sign_in_btn21 = document.querySelector("#sign-in-btn2");
const sign_up_btn21 = document.querySelector("#sign-up-btn2");
sign_up_btn1.addEventListener("click", () => {
    container1.classList.add("sign-up-mode");
});
sign_in_btn1.addEventListener("click", () => {
    container1.classList.remove("sign-up-mode");
});
sign_up_btn2.addEventListener("click", () => {
    container1.classList.add("sign-up-mode2");
});
sign_in_btn21.addEventListener("click", () => {
    container1.classList.remove("sign-up-mode2");
});


  function showDisclaimerPopup() {
    var popup = document.createElement('div');
    popup.className = 'popup';

    var text = document.createElement('div1');
    text.innerHTML = `
    <h2 style="color: orange;" class="privacy">Disclaimer</h2>
      
     
      <h5> Disclaimer:</h5>
      <p>
      The following disclaimer governs your use of the Volunteer Connect website and your participation in any volunteer activities facilitated through the website. By using the website and engaging in volunteer opportunities, you agree to be bound by this disclaimer.<br>
      
      <br>1. Volunteer Opportunities:
      The Volunteer Connect website serves as a platform to connect individuals with volunteer opportunities offered by various organizations. We strive to provide accurate and up-to-date information about these opportunities. However, we do not guarantee the accuracy, completeness, or reliability of the information provided by the organizations. It is your responsibility to verify the details of the volunteer activities before committing to them.<br>
      
      <br>2. Volunteer-Organization Relationship:
      The Volunteer Connect website acts solely as an intermediary between volunteers and organizations offering volunteer opportunities. We do not assume any responsibility or liability for the actions, omissions, or conduct of the organizations or volunteers involved. Any agreement or arrangement made between a volunteer and an organization is solely between those parties, and we are not a party to such agreements.<br>
      
      <br>3. Eligibility and Screening:
      While we strive to ensure the reliability and trustworthiness of the organizations posting volunteer opportunities, we do not guarantee the eligibility, background, or credentials of any organization or individual on the website. Volunteers are responsible for conducting their own due diligence and exercising caution before engaging in any volunteer activities.<br>
      
      <br>4. Risks and Liability:
      Engaging in volunteer activities may involve certain risks, including physical injury, property damage, or other harm. By participating in volunteer opportunities, you assume all associated risks and acknowledge that neither the Volunteer Connect website nor its operators, employees, or affiliates shall be liable for any loss, injury, or damage resulting from your participation in volunteer activities.<br>
      
      <br>5. Third-Party Websites and Services:
      The Volunteer Connect website may contain links to third-party websites or services that are not under our control. We do not endorse or assume any responsibility for the content, privacy policies, or practices of these websites or services. You are solely responsible for any interactions or transactions that occur between you and third parties.<br>
      
      <br>6. Modifications and Termination:
      We reserve the right to modify, suspend, or terminate the Volunteer Connect website or any part of it at any time without prior notice. We shall not be liable to you or any third party for any modification, suspension, or termination of the website.<br>
      
      <br>7. Governing Law:
      This disclaimer shall be governed by and construed in accordance with the laws of [jurisdiction]. Any legal action or proceeding arising out of or relating to this disclaimer shall be exclusively brought in the courts of [jurisdiction].<br>
      
      <br>By using the Volunteer Connect website, you acknowledge that you have read, understood, and agreed to this disclaimer. If you do not agree with any part of this disclaimer, please refrain from using the website.
      </p>
    `;

    var button = document.createElement('button');
    button.textContent = 'I Understand';
    button.className = 'popup-button';
    button.addEventListener('click', function () {
      popup.remove();
    });

    popup.appendChild(text);
    popup.appendChild(button);
    document.body.appendChild(popup);
  }

  function showTermsPopup() {
    var popup = document.createElement('div');
    popup.className = 'popup';

    var text = document.createElement('div');
    text.innerHTML = `
      <h2 style="color: orange;" class="privacy">Terms and Conditions</h2>

      <h5>Acceptance of Terms<br></h5>
      <p>
      
These Terms and Conditions ("Agreement") govern your use of the Volunteer Connect website ("Website") and all related services provided by [Your Organization] ("Organization"). By accessing or using the Website, you agree to be bound by this Agreement. If you do not agree with these terms, you should not use the Website.<br>

<br>User Eligibility
The Website is available for use by individuals who are at least 18 years old or are accessing the Website under the supervision of a parent or legal guardian. By using the Website, you represent and warrant that you meet these eligibility requirements.<br>

<br>Volunteer Connect Platform
The Volunteer Connect platform serves as an intermediary between volunteers and organizations seeking volunteers. The Organization does not guarantee the accuracy, completeness, or reliability of any volunteer information or opportunities listed on the Website. Users are responsible for verifying the authenticity and suitability of any volunteer opportunities before engaging in any activities.<br>

<br>User Responsibilities
Users of the Website agree to:<br>

<br>4.1 Provide accurate and up-to-date information during the registration process.<br>
4.2 Abide by all applicable laws and regulations while using the Website.<br>
4.3 Respect the privacy and rights of other users and organizations.<br>
4.4 Take responsibility for their own actions and interactions with other users and organizations.<br>

<br>Intellectual Property
All content on the Website, including text, graphics, logos, and images, is the property of the Organization and is protected by intellectual property laws. Users may not reproduce, distribute, modify, or create derivative works from any content without the prior written consent of the Organization.<br>

<br>Privacy
The Organization respects the privacy of its users. By using the Website, you agree to the collection, use, and disclosure of personal information as outlined in the Organization's Privacy Policy.<br>

<br>Limitation of Liability
The Organization shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of or related to the use or inability to use the Website or the volunteer opportunities listed on the Website. Users assume all risks associated with their use of the Website.<br>

<br>Indemnification
Users agree to indemnify and hold the Organization, its affiliates, and their respective officers, directors, employees, and agents harmless from and against any claims, losses, liabilities, expenses, damages, or demands arising out of or in connection with the user's use of the Website.<br>

<br>Modification of Terms
The Organization reserves the right to modify or amend these Terms and Conditions at any time. Users will be notified of any changes, and continued use of the Website after such notification constitutes acceptance of the modified terms.<br>

<br>Termination
The Organization reserves the right to suspend or terminate a user's access to the Website at any time, without prior notice or liability, for any reason deemed appropriate by the Organization.<br>

<br>Governing Law
This Agreement shall be governed by and construed in accordance with the Philippine JURISDICTION. Any disputes arising out of or in connection with this Agreement shall be resolved exclusively through the courts of [Jurisdiction].<br>
      </p>
    `;
    var button = document.createElement('button');
    button.textContent = 'I Understand';
    button.className = 'popup-button';
    button.addEventListener('click', function () {
      popup.remove();
    });

    popup.appendChild(text);
    popup.appendChild(button);
    document.body.appendChild(popup);
  }






  function showPolicyPopup() {
    var popup = document.createElement('div');
    popup.className = 'popup';

    var text = document.createElement('div1');
    text.innerHTML = `
    <h2 style="color: orange;" class="privacy">Privacy and Policy</h2>
      
     
      <h5>  Effective Date: [Insert Date]
      </h5>
      <p>
   

      <br>Thank you for visiting Volunteer Connect website. This Privacy Policy explains how we collect, use, and disclose information obtained through the use of our website. We are committed to protecting your privacy and ensuring the security of any personal information you provide to us.<br>

      <br>Information We Collect:
1.1 Personal Information:<br>
We may collect personal information that you voluntarily provide to us when you register as a volunteer on our website or communicate with us through our contact forms or email. This information may include your name, email address, phone number, and any other information you choose to provide.<br>

<br>1.2 Non-Personal Information:
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

<br>Disclosure of Information:
3.1 Service Providers:<br>
We may disclose your personal information to trusted third-party service providers who assist us in operating our website, managing our programs, or providing related services. These service providers are obligated to protect your personal information and are prohibited from using it for any other purpose.<br>

<br>3.2 Legal Compliance:
We may disclose your information as required by law, regulation, legal process, or governmental request.<br>

<br>3.3 Business Transfers:
In the event of a merger, acquisition, or sale of our organization or assets, your personal information may be transferred to the relevant third party as part of the transaction.<br>

<br>Data Security:
We have implemented appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, no data transmission or storage system can be guaranteed to be 100% secure. Therefore, we cannot guarantee the absolute security of your information.<br>

<br>Links to Third-Party Websites:
Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of these websites. We encourage you to review the privacy policies of any third-party websites you visit.<br>

<br>Children's Privacy:
Our website is not intended for children under the age of 13. We do not knowingly collect personal information from children under the age of 13. If you believe we have inadvertently collected personal information from a child under 13, please contact us, and we will promptly delete the information.<br>

<br>Changes to this Privacy Policy:
We reserve the right to modify or update this Privacy Policy at any time. Any changes will be effective immediately upon posting the updated Privacy Policy on our website. By continuing to use our website, you consent to the updated Privacy Policy.<br>

<br>Contact Us:
If you have any questions, concerns, or requests regarding this Privacy Policy or our privacy practices, please contact us at [insert contact information].

<br>By using our website, you acknowledge that you have read and understood this Privacy Policy and agree to the collection, use, and disclosure of your information as described herein.<br>

<br>Note: This is a general template for a Privacy Policy and may need to be tailored to meet the specific requirements.<br>

<br>Acceptance of Terms
These Terms and Conditions Agreement govern your use of the Volunteer Connect website and all related services provided by [Your Organization]. By accessing or using the Website, you agree to be bound by this Agreement. If you do not agree with these terms, you should not use the Website.<br>

<br>User Eligibility
The Website is available for use by individuals who are at least 18 years old or are accessing the Website under the supervision of a parent or legal guardian. By using the Website, you represent and warrant that you meet these eligibility requirements.<br>

<br>Volunteer Connect Platform
The Volunteer Connect platform serves as an intermediary between volunteers and organizations seeking volunteers. The Organization does not guarantee the accuracy, completeness, or reliability of any volunteer information or opportunities listed on the Website. Users are responsible for verifying the authenticity and suitability of any volunteer opportunities before engaging in any activities.<br>

<br>User Responsibilities
Users of the Website agree to:<br>

<br>4.1 Provide accurate and up-to-date information during the registration process.
4.2 Abide by all applicable laws and regulations while using the Website.<br>
4.3 Respect the privacy and rights of other users and organizations.<br>
4.4 Take responsibility for their own actions and interactions with other users and organizations.<br>
      </p>
    `;

    var button = document.createElement('button');
    button.textContent = 'I Understand';
    button.className = 'popup-button';
    button.addEventListener('click', function () {
      popup.remove();
    });

    popup.appendChild(text);
    popup.appendChild(button);
    document.body.appendChild(popup);
  }