<?php
require_once("../../inc/connection.php");
require_once("../include/verify_login.php");
try
{
    $sql="DELETE FROM operators WHERE id=?" ;
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$_REQUEST['operatorid']);
    $statement->execute();
    $_SESSION['message']="Operator removed successfully";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../operators.php");
?>