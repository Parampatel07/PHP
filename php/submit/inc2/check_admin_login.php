<?php
session_start();
if(isset($_SESSION['admin_id'])==false)
{
    $_SESSION['message']="Login is required";
    header("location:index.php");
    exit();
}
?>