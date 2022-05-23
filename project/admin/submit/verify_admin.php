<?php
session_start();
require_once("../../inc/connection.php");
extract($_POST);
try
{
    $sql = "SELECT id,password FROM admin where email=?";
    $statement =$db->prepare($sql);
    $statement->setfetchmode(PDO::FETCH_ASSOC);
    $statement->bindparam(1,$email);
    $statement->execute();
    $row=$statement->fetch();
    $param=$statement->rowCount();
    // echo $param;
    $pageurl="../index.php";
    if($param==0)
    {
        $_SESSION['message']="Login attemp failed";
    }
    else
    {
        $HashedPassword=$row['password'];
        $ispass=password_verify($password,$HashedPassword);
        if($ispass==false)
        {
            $_SESSION['message']="Invalid Login Input";
        }
        else
        {
            $_SESSION['admin_id']=$row['id'];
            $_SESSION['message']="Login successfull";
            $pageurl="../catagory.php";
        }
    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__); 
}
header("location:$pageurl");
?>