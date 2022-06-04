<?php
require_once("../include/verify_login.php");
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);

try
{
    $sql="INSERT INTO feedback_reply (customerid, feedbackid, advertiseid, title, description) VALUES (?,?,?,?,?)";
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$customerid);
    $statement->bindparam(2,$feedbackid);
    $statement->bindparam(3,$advertiseid);
    $statement->bindparam(4,$subject);
    $statement->bindparam(5,$message);
    $statement->execute();
    // echo "query succes";
    // send mail through function
    // first include function.php given by sir with lib diretory in your project
    include_once("../../inc/function.php");// given by sir to send mail use send mail function
    SendMail($custemail,$subject,$message);
    // echo " mail send";
    $_SESSION['message']="Feedback Reply Sent";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../feedback.php");
?>