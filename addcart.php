<?php
session_start();
require_once 'db.php';
        if(isset($_POST["cardname"]))
        {
            $table=$_SESSION["cart"];
            $name=$_POST["cardname"];
            $sql="INSERT INTO `$table` (`cart`)VALUES('$name')";
            if(mysqli_query($con,$sql))
            {
                echo "<script>alert('$name Added to Cart');document.location.href='Shop.php';</script>";
            }
            else if(mysqli_errno($con)==1062)
            {
            echo "<script>alert('$name Alredy in Cart');document.location.href='Shop.php';</script>";
            }
            else
            {
                echo "<script>alert('Sign in First');document.location.href='Shop.php';</script>";

            }
        }
        if(isset($_POST["cardremove"]))
        {
            $table=$_SESSION["cart"];
            $name=$_POST["cardremove"];
            $sql1="DELETE FROM `$table` WHERE `cart`='$name'";
            if(mysqli_query($con,$sql1))
            {
                echo "<script>alert('$name Removed From Cart');document.location.href='cart.php';</script>";
            }
            else
               echo "<script>alert('Try Later..');document.location.href='cart.php';</script>";
        }
?>