<?php
// session_start();
require_once("../include//verify_login.php");
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);
try
{
    $sql="INSERT into template (categoryid,title,description,image) values (?,?,?,?)";
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$catagory);
    $statement->bindparam(2,$title);
    $photo=rand(0,99).rand(0,99).rand(0,99).$_FILES['sample']['name'];
    $statement->bindparam(3,$description);
    $statement->bindparam(4,$photo);
    $statement->execute();
    move_uploaded_file($_FILES['sample']['tmp_name'],"../../images/template/$photo");
    echo "category inserted";
    $_SESSION['message']="Template has been inserted";
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
header("location:../design_template.php")
?>