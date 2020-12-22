<?php
session_start();
 if(session_destroy())
 {
   echo "<script>alert('Logout successfully..');window.location.href='/index.php';</script>";
 }
 else
 {
    echo "<script>alert('Logout error..');window.location.href='/index.php';</script>";
 }
?>