<?php
require_once("../../inc/connection.php");
require_once("../include/verify_login.php");
try
{
    $sql="DELETE FROM template WHERE id={$_REQUEST['templateid']}";
    $statement=$db->prepare($sql);
    unlink("../../images/template/{$_REQUEST['image']}");
    $statement->execute();
    $_SESSION['message']="Template deleted succesffully";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../design_template.php");
?>