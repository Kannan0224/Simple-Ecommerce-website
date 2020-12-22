<?php
session_start();
 require_once 'db.php';
    if(isset($_SESSION["cart"]))
    {
        $table=$_SESSION["cart"];
        $sql1="SELECT `wishlist` from `$table` where 1";
        $result=mysqli_query($con,$sql1);
        $cart=array();
        while($value=mysqli_fetch_assoc($result))
        {
            array_push($cart,$value["wishlist"]);
        }
    }
        if(isset($_POST["cardname"]))
        {
            $name=$_POST["cardname"];
            $sql="INSERT INTO `$table` (`wishlist`)VALUES('$name')";
            if(mysqli_query($con,$sql))
            {
                echo "<script>alert('$name Added to WishList');</script>";
                header("Refresh:0");
            }
            else if(mysqli_errno($con)==1062)
            {
            $sql2="DELETE FROM `$table` WHERE `wishlist`='$name'";
            if(mysqli_query($con,$sql2))
            {
                echo "<script>alert('$name Removed...');</script>";
                header("Refresh:0");
            }
            else
            echo "<script>alert('Please Try Later..');</script>";
                header("Refresh:0");
            }
            else
            {
                echo "<script>alert('Sign in First');</script>";
                header("Refresh:0");
            }
        }
?>