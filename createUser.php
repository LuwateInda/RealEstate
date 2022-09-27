<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel = "stylesheet" href = "./Assets/CSS/style.css">
    <!--BoxIcons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

    <header>
        <div class = "nav container">
            <!--Logo-->
            <a href = "adminHome.php" class = "logo"><i class='bx bx-home'></i>Real Estate</a>
        
            <!--Menu icon-->
            <input type = "chckbox" name = "" id ="menu">
            <label for = "menu"> <i class='bx bx-menu' id = "menu-icon"></i></label>
        
            <!--Nav ist-->
            <ul class = "navbar">
                <li><a href = "adminHome.php">Home</a></li>
                <li><a href = "createUser.php">Create User</a></li>
                <li><a href = "adminViewListings.php">View Listings</a></li>
                <li><a href = "#footer">Contacts</a></li>
            </ul>      
        </div>
    </header>

    <h1>Create a User</h1>
    <div class = "login-container">
        <div class = "login container">
            <form action="" method="post">
                <span>Full Name</span>
                <input type = "text" name="full_name" placeholder ="Name">
                <span>Username</span>
                <input type = "text" name="username" placeholder ="Username">
                <span>Password</span>
                <input type = "password" name="password" placeholder ="Password">
                <span>Email</span>
                <input type = "email" name="email" placeholder ="Email">

                <input type = "submit" name = "submit" value = "Create" class = "button">
            </form>
        </div>

    </div>
</body>
</html>

<?php
    $user = 'Luwate';
    $pass = '$Password$';
    $db = 'myproperty';
    
    $dbConnection = new mysqli('localhost', $user, $pass, $db);
    
    if(isset($_POST['submit'])){
        $full_name = $_POST['full_name'] ;
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if($dbConnection->connect_error){
            die('Unable to connect');
        }else{
            $query = "INSERT INTO `agent`( `full_name`, `username`, `password`, `email`) VALUES ('$full_name','$username','$password','$email')";
            $query_run = mysqli_query($dbConnection, $query);

            if ($query == TRUE) {
                echo "<script>alert('User created successfully!');</script>";
                echo "<script>window.location.href='adminHome.php'</script>";
              } else {
                
                echo "<script>alert('Something went wrong. Please try again');</script>";
                echo "<script>window.location.href='createUser.php'</script>";
              }
    
    
        }
    }
?>