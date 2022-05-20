<?php
session_start();
if(isset($_SESSION['admin_id'])==false)
{
    //page not loged in opened directly
    $_SESSION['message']="Login is required";
    header("location:index.php");
}
?>