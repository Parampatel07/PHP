<?php
require_once("../../inc/connection.php");
require_once("../include/verify_login.php");
extract($_POST);
var_dump($_POST);
$sql="UPDATE operators set email=? ,fullname=? , mobile=?,dob=? where id=?";
try
{
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$email);
    $statement->bindparam(2,$fullname);
    $statement->bindparam(3,$mobnumber);
    $statement->bindparam(4,$date);
    $statement->bindparam(5,$operatorid);
    $statement->execute();
    $_SESSION['message']="Operator updated succesfully"; 
}
catch(PDOException $error)
{
    LogError($error ,__FILE__);
}
header("location:../operators.php");

?>