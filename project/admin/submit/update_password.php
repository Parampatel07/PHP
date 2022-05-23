<?php
require_once("../include/verify_login.php");
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);
try
{
    $sql="SELECT password FROM admin WHERE id=?";
    $statement=$db->prepare($sql);
    $statement->setfetchmode(PDO::FETCH_ASSOC);
    $statement->bindparam(1,$_SESSION['admin_id']);
    $statement->execute();
    $row=$statement->fetch();
    var_dump($row);
    if(sizeof($row)>=1)
    {
        if(password_verify($oldpassword,$row['password'])==false)
        {
            $_SESSION['message']="Old Password does not match";
        }
        else
        {
            if($newpassword!=$conpassword)
            {
                $_SESSION['message']=" new password and confirm password does not match";
            }
            else
            {
                $hashnewpassword=password_hash($newpassword,PASSWORD_DEFAULT);
                echo $hashnewpassword;
                try
                {
                    $sql="UPDATE admin set password=? WHERE id=?";
                    $statement=$db->prepare($sql);
                    $statement->bindparam(1,$hashnewpassword);
                    $statement->bindparam(2,$_SESSION['admin_id']);
                    $statement->execute();
                    $_SESSION['message']="Your Password has been updated";
                    // echo "yeah boi";
                }
                catch(PDOException $error)
                {
                    LogError($error,__FILE__);
                }
            }
        }
    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../change_password.php");
?>