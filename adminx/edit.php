<?php 
    session_start();
    echo $_SESSION['admin_user'] =$_GET['username'];
    echo $_SESSION['userid'] = $_GET['uid'];
    echo "<script> location.replace('../index.php')</script>";
?>