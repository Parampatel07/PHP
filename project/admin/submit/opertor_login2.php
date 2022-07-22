<?php
session_start();
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);
try
{
$sql="SELECT id,password 'dbpassword' from operators where email=?";
$stat=$db->prepare($sql);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->bindparam(1,$email);
$stat->execute();
$row=$stat->fetch();
var_dump($row);
$page="../operators_login.php";
if(isset($row))
{
    // var_dump($temp);
    // echo "temp";
    if(password_verify($password,$row['dbpassword'])==false)
    {
        $_SESSION['error']="Invalid login attempt";
    }
    else
    {
        $_SESSION['message']="Login succesfull";
        $_SESSION['id']=$row['id'];
        $page="../catagory.php";
        // echo $row['id'];
    }
}
else
{
    $_SESSION['error']="Invalid login attempt";
    // echo "not done";\
}
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:$page");