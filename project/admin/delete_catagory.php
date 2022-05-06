<?php
session_start();
require_once("../inc/connection.php");
try
{
    $sql = "delete from category where id=?";
    $statement = $db->prepare($sql);
    $data = array($_REQUEST['categoryid']);
    $statement->execute($data);
    unlink("../images/category/{$_REQUEST['image']}");
    $_SESSION['message']= "Category Deleted";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("Location:catagory.php");
?>