<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$date = $_POST['date'];
$time = $_POST['time'];

//Below is the login details for the database. Fill in before 
$user = 'luwate';
$pass = 'etawul';
$db = 'myproperty';

//Database connection
$dbConnection = new mysqli('localhost', $user, $pass, $db);
if($dbConnection->connect_error){
    die('Unable to connect');
}else{
    $stmt = $dbConnection->prepare("insert into viewingrequest(name, email, tel, date, time)
        values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$name, $email, $tel, $date, $time);
        $stmt->execute();
        echo "<script> alert('Booking submitted successfully') </script>";
        $stmt->close();
        $dbConnection->close();
        echo "<script> window.location = 'index.html' </script>";
}
?>


