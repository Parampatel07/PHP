<?php
session_start();
require_once("../../inc/connection.php");
extract($_POST);
$sql = "INSERT INTO operators(email,password,fullname,mobile,dob) VALUE (?,?,?,?,?)";
try
{
    $statement= $db->prepare($sql);
    $statement->bindparam(1,$email);
    $haspass=password_hash($password,PASSWORD_DEFAULT); 
    $statement->bindparam(2,$haspass);
    $statement->bindparam(3,$fullname);
    $statement->bindparam(4,$mobnumber);
    $statement->bindparam(5,$date);
    $statement->execute();
    $_SESSION['message']="Operator succesfully inserted"; 
}
catch(PDOException  $error)
{
    LogError($error , __FILE__);
}
header("Location: ../operators.php");
?>