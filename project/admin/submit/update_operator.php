<?php
require_once("../../inc/connection.php");
require_once("../include/verify_login.php");
$sql="UPDATE operators set email=? , password=?, fullname=? , mobile=?,dob=?,last_login_date=? where id=?";
try
{
    $statement=$db->prepare($sql);
    $statement->bindparam(1,);
    $statement->bindparam(2,);
    $statement->bindparam(3,);
    $statement->bindparam(4,);
    $statement->bindparam(5,);
}
catch(PDOException $error)
{
    LogError($error ,__FILE__);
}

?>