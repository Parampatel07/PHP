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
    // var_dump($row);
    if(sizeof($row)>=1)
    {
        if($row['password']!=$oldpassword)
        {
            $_SESSION['message']= "Incorrect Old password";
            
        }
    }
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>