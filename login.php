<?php 
session_start();
include_once('conn.php');

$usercred = new DB_con();

if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password =$_POST['password'];
  $results = $usercred->login($email);
  $num = mysqli_fetch_array($results);
  if ($num > 0) {
   $_SESSION['user_id'] = $num['user_id'];
   $_SESSION['full_name'] = $num['full_name'];
    
    echo "<script>window.location.href='listings.html'</script>";
  } else {
    // Message for unsuccessfull login
    echo "<script>alert('Invalid details. Please try again');</script>";

    echo "<script>window.location.href='login.php'</script>";
  }
}
?>


<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale-1.0">
        <title>Login</title>
        <!--Css Links-->
        <link rel = "stylesheet" href = "./Assets/CSS/style.css">
        <!--BoxIcons-->
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <!--Navbar-->
        <header>
            <div class = "nav container">
                <!--Logo-->
                <a href = "index.html" class = "logo"><i class='bx bx-home'></i>Real Estate</a>

                <!--Log In Button-->
                <a href="signup.php" class="btn">Sign Up</a>
            </div>
        </header>

        <!--LogIn-->
        <div class = "login container">
            <div class="login-container">
                <h2>Log In To Continue</h2>
                <p>Login using your registered data</p>
                <!--Login Form-->
                <form method="POST">
                    <span>Enter your email address</span>
                    <input type = "email" name = "email" id = "" placeholder = "yourmail@gmail.com" required>
                    <span>Enter your password</span>
                    <input type = "password" name = "password" id = "" placeholder = "Password" required>
                    <input type="submit" name="login" value="Log In" class = "button">
                    <a href = "#">Forgot Password?</a>
                </form>
                <a href="signup.php" class="btn">Sign Up</a>
            </div>

            <!--Log In Image-->
            <div class="login-image">
                <img src="Assets/img/buy.png" alt="">
            </div>
        </div>


        <!--Footer-->
        <section class="footer" id = "footer">
            <div class="footer-container container">
                <h2>Real Estate</h2>
                <div class="footer-box">
                    <h3>Quick Links</h3>
                    <a href="#">Agency</a>
                    <a href="#">Building</a>
                    <a href="#">Rates</a>
                </div>

                <div class="footer-box">
                    <h3>Locations</h3>
                    <a href="#">Nairobi</a>
                    <a href="#">Mombasa</a>
                    <a href="#">Kisumu</a>
                </div>

                <div class="footer-box">
                    <h3>Contacts</h3>
                    <a href="#">0712345678</a>
                    <a href="#">yourmail@gmail.com</a>
                    <div class = "social">
                        <a href = "#"><i class='bx bxl-instagram'></i></a>
                        <a href = "#"><i class='bx bxl-twitter'></i></a>
                        <a href = "#"><i class='bx bxl-facebook'></i></a>
                    </div>
                </div>
            </div>
        </section>

        <!--Copyright-->
        <div class="copyright">
            <p>&#169; Group 9 All Rights Reserved</p>
        </div>

    </body>
</html>