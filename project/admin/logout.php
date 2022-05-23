<?php 
    session_start();
    unset($_SESSION['admin_id']); //unset delete $_session['id'] FROM MEMORY
    $_SESSION['message'] = "signout successful";
    header("location:index.php");
?>