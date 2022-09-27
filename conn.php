<?php
define ('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'myproperty');

class DB_con{
    function __construct()
    {
        $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $this->dbh=$con;

        //checking connection
        if(mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL database: " . mysqli_connect_error(); 
        }
    }

    public function emailAvailability($email)
    {
        $result = mysqli_query($this->dbh,"select email FROM customer WHERE email='$email");
        return $result;
    }

public function registration($full_name,$tel_no,$email,$password)
    {
        $results = mysqli_query($this->dbh,"insert into customer(full_name,tel_no,email,password) values('$full_name','$tel_no','$email','$password')");
        return $results;
    }
public function booking($name,$email,$tel,$date,$time)
    {
        $res = mysqli_query($this->dbh,"insert into viewingrequest(name,email,tel,date,time) values('$name','$email','$tel','$date','$time')");
        return $res;
    }
 public function purchase($name,$email,$tel,$date,$time)
    {
        $res = mysqli_query($this->dbh,"insert into viewingrequest(name,email,tel,date,time) values('$name','$email','$tel','$date','$time')");
        return $res;
    }
  

public function login($email)
    {
        $result=mysqli_query($this->dbh,"select user_id, full_name from customer where email='$email'");
        return $result;
    }
}
