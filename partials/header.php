<?php
require 'config/database.php';
?>
    <?php
    if (isset($_SESSION['error'])) {
        $error_msg = $_SESSION['error'];
        unset($_SESSION['error']); // Clear the error message once displayed
        echo '<script>alert("' . $error_msg . '");</script>';
    }
    $loggedIn = isset($_SESSION['user_id']);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" initial-scale=1.0 content="width=100%">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Libre+Baskerville:wght@400;700&family=Poppins:wght@600&family=Work+Sans:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    
<body>
    <!-- HEADER                                                                 ------------HOME PAGE----------------------------------------- -->
    <header>
        
        <nav class="navbar">
            <a href="<?= ROOT_URL ?>"><img src="./media/logo.png"  id="vc"></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a  class="nav-link" href="<?= ROOT_URL ?>progams1.php">Volunteer Programs</a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT_URL ?>HowItWorks.php" class="nav-link">How It Works</a>
                </li>
                <li class="nav-item">
                    <a href="<?= ROOT_URL ?>FAQs.php" class="nav-link">FAQs</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION['user_id'])) {
                $id = filter_var($_SESSION['user_id'], FILTER_SANITIZE_NUMBER_INT);
                $query = "SELECT email, user_type FROM users WHERE id = $id";
                $result = mysqli_query($connection, $query);

                // Check if the query was successful and if we have a valid user_data
                if ($result && mysqli_num_rows($result) > 0) {
                    $user_data = mysqli_fetch_assoc($result);

                    if ($user_data['user_type'] == 'Volunteer') {
                        $dashboard_url = 'dashboard/dashboard.volunteer.php'; // Replace with the URL of the volunteer dashboard
                    } else if ($user_data['user_type'] == 'Organization') {
                        $dashboard_url = 'dashboard/dashboard.org.php'; // Replace with the URL of the organization dashboard
                    }
                } else {
                    // Set a default dashboard URL if user_data is not found or query fails
                    $dashboard_url = '#'; // Replace with a default URL or an error page if desired
                }
            }
            ?>
            <div class="rightSide">
                <hr>
                <?php if (!$loggedIn) : ?>
                <button class="login" onclick="toggleMenu2()">Sign in</button>
                <?php else : ?>
                <!-- Wrap the email button in an anchor tag with the appropriate dashboard URL -->
                <?php if (isset($dashboard_url)) : ?>
                    <a href="<?php echo $dashboard_url; ?>">
                        <button class="login"><?php echo $user_data['email'] ?></button>
                    </a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            
         <!-- for mobile view -->
            <div class="hamburger" onclick="toggleMenu()">
                <span class="bar"></span>
                <span class="bar" onclick="toggleMenu()"></span>
                <span class="bar"></span>
            </div>
        </nav>
       
    </header>
       <!-- nav for log in --> 
    <div class="sub-menu-registerLogin" id="register">
        <div class="sub-menu">
                <hr>
                <a  class="sub-menu-link">
                   
                    <p onclick="toggleMenu4()">Organization</p>
                    <span onclick="toggleMenu4()">></span>
                </a>
    
                <a class="sub-menu-link">
                    
                    <p onclick="toggleMenu3()">Volunteer</p>
                    <span onclick="toggleMenu3()">></span>
                </a>
            </div>
        </div>
    </div>


       <!-- Register Volunteer -->

<div class="sub-menu-volunteer" id="volunteer1">
    <div class="sub-menu-register">
            
        <div class="container">
            <div class="signin-signup">
                <form action="vol-login.php" class="sign-in-form" method="POST">
                    <h1>Login to <img src="./media/logo2.png" class="logo2"><span class="cnct">Connect </span> </h1>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" name="login" value="Login" class="btn">
                    <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
                </form>
                <form action="vol-reg.php" class="sign-up-form" method="POST">   
                    <h2 class="title">Volunteer</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name ="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirmpassword" placeholder=" Confirm Password" required>
                    </div>
                    <input type="checkbox" id="vol" name="user_type" value="Volunteer" style="display:none" checked> Volunteer 
                    <button class="btn" type="submit" name="sign-up">Sign Up</button>
                    <p class="disclaimer-text">By clicking "Sign Up" you agree to our <a href="#" class="orange-link"
                        onclick="showTermsPopup()">Terms of Use</a>, <a href="#" class="orange-link"
                        onclick="showPrivacyPopup()">Privacy Policy</a>, and <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Disclaimer</a></p>
                    <p class="account-text"> Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">  
                    <div class="content">
                        <h3>Already have an account? </h3>
                        <p>Let's get you back logged in!</p>
                        <button class="btn" id="sign-in-btn">Sign in</button>
                    </div>
                    <img src="signin.svg" alt="" class="image">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        <p>We'll get you signed up in no time!</p>
                        <button class="btn" id="sign-up-btn">Sign up</button>
                        
                    </div>
                    <img src="signup.svg" alt="" class="image">
                </div>
            </div>
        </div>
        </div>
    </div>

<!-- register organization -->

<div class="sub-menu-organization" id="organization1">
    <div class="sub-menu-register">

        <div class="container" id="container1">
            <div class="signin-signup">
                <form action="org-login.php" class="sign-in-form" method="POST">
                    <h1>Login to <img src="./media/logo2.png" class="logo2"><span class="cnct">Connect </span> </h1>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username1" placeholder="Add the name of your foundation here">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email1" placeholder="Organization Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password1" placeholder="Password">
                    </div>
                    <input type="submit" name="login1" value="Login" class="btn">
                    <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn21">Sign up</a></p>
                </form>
                <form action="org-reg.php" class="sign-up-form" method="POST">   
                    <h2 class="title">Organization</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username1" placeholder="Add the name of your organization here" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email1" placeholder="Organization Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password1" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="confirmpassword1" placeholder=" Confirm Password" required>
                    </div>
                    <input type="checkbox" id="org" name="user_type1" value="Organization" style="display:none" checked> Organization
                    <input type="submit" name="sign-up1" class="btn">
                    <p class="disclaimer-text">By clicking "Sign Up" you agree to our <a href="#" class="orange-link"
                        onclick="showTermsPopup()">Terms of Use</a>, <a href="#" class="orange-link"
                        onclick="showPrivacyPopup()">Privacy Policy</a>, and <a href="#" class="orange-link"
                        onclick="showDisclaimerPopup()">Disclaimer</a></p>
                    <p class="account-text"> Already have an account? <a href="#" id="sign-in-btn21">Sign in</a></p>
                </form>
            </div>
            <div class="panels-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Already have an account? </h3>
                        <p>Let's get you back logged in!</p>
                        <button class="btn" id="sign-in-btn1">Sign in</button>
                    </div>
                    <img src="signin2.svg" alt="" class="image">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>New Here?</h3>
                        <p>We'll get you signed up in no time!</p>
                        <button class="btn" id="sign-up-btn1">Sign up</button>
                        
                    </div>
                    <img src="signup2.svg" alt="" class="image">
                </div>
            </div>
        </div>
        </div>
    </div>
    
    <script>
        <?php if (isset($error_msg)) { ?>
            alert("<?php echo $error_msg; ?>");
        <?php } ?>
    </script>


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

 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>