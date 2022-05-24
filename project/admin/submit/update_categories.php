<?php
session_start();
// require_once("include/verify_login.php");
require_once("../../inc/connection.php");
extract($_POST);
var_dump($_POST);
var_dump($_FILES);
    try
    {
        $sql="UPDATE category SET ctitle=?, description=?, adtype=?, subadtype=?, pageno=?, adsize=?, rate=?, sampleimage=? WHERE id=?";
        $statement=$db->prepare($sql);
        $statement->bindparam(1,$title);
        $statement->bindparam(2,$description);
        $statement->bindparam(3,$adtype);
        $statement->bindparam(4,$rdo);
        $statement->bindparam(5,$pageno);
        $statement->bindparam(6,$adsize);
        $statement->bindparam(7,$rate);
        if(strlen($_FILES['sample']['name'])>=1)
        {
            $photo= rand(11,99).rand(11,99).rand(11,99).$_FILES['sample']['name'];
            move_uploaded_file($_FILES['sample']['tmp_name'],"../../images/category/$photo");
            unlink("../../images/category/$oldsampleimage");
        }
        else
        {
            $photo = $oldsampleimage;
        }
        $statement->bindparam(8,$photo);
        $statement->bindparam(9,$categoryid);
        $statement->execute();
        $_SESSION['message']="category updated";
        echo "done";
    }
    catch(PDOException $error)
    {
        LogError($error , __FILE__);
    }
?>