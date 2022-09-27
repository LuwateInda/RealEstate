
<?php 
include_once('conn.php');

$userdata = new DB_con();

if(isset($_POST['reg_btn'])){
  $full_name = $_POST['full_name'];
  $tel_no = $_POST['tel_no'];
  $email = $_POST['email'];
  $password= md5($_POST['password']);

   $sql = $userdata->registration($full_name, $tel_no, $email, $password);
  if ($sql == TRUE) {
    echo "<script>alert('Registration successfull!');</script>";
    echo "<script>window.location.href='listings.html'</script>";
  } else {
    
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='signup.php'</script>";
  }
  
}
?>



<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale-1.0">
        <title>Sign Up</title>
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
                <a href="login.php" class="btn">Log In</a>
            </div>
        </header>

        <!--Sign Up-->
        <div class = "login container">
            <div class="login-container">
                <h2>Let's get registered</h2>
                <p>Already have an account?<a href = "login.html">Log In</a></p>
                <!--Sign Up Form-->
                <form method="POST">
                    <span>Full Name</span>
                    <input type ="text" name = "full_name" id = "name" placeholder = "Your Name" required>
                    <span>Phone</span>
                    <input type = "text" name = "tel_no" id = "phone" placeholder="Enter your number" required>
                    <span>Enter your email address</span>
                    <input type = "email" name = "email" id = "email" placeholder = "yourmail@gmail.com" required>
                    <span>Enter your password</span>
                    <input type = "password" name = "password" id = "password" placeholder = "At least 8 characters" required>
                    <input type="submit" name="reg_btn" value="Sign Up" class = "button">
                    <a href = "login.php">Already have an account?</a>
                </form>
                <a href="login.html" class="btn">Log In</a>
            </div>

            <!--Sign Up Image-->
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