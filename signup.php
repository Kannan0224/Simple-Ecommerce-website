<?php
 require_once 'db.php';
    if(isset($_POST["first"]))
    {
        $first=$_POST["first"];
        $last=$_POST["last"];
        $userdata=$_POST["username"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $phone=$_POST["phone"];
        $password=$_POST["pass"];
        $sql="INSERT INTO `login`(name,username,email,address,phone,pass) VALUES ('$first $last','$userdata','$email','$address','$phone','$password');";
        $sql1="CREATE TABLE `$userdata` (`cart` varchar(20)UNIQUE,`wishlist` varchar(20)UNIQUE,`order` varchar(20),`date` varchar(20))";
        if(mysqli_query($con,$sql))
        {
            if(mysqli_query($con,$sql1))
            echo "<script>alert('Register Success');window.location.href='index.php';</script>";
            else
            echo "<script>alert('Register Failed');window.location.href='signup.php';</script>";
        }
        else
        {
            echo "<script>alert('Register Failed');window.location.href='signup.php';</script>";
        }
    }
?>