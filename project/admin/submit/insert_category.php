<?php
 //database connectivity
 require_once("../../inc/");
 extract($_POST);
 //pdo method of un-named place holder
 $sql="inster into category (ctitle,description,adtype,subadtype,pageno,adsize,rate,sampleimage) values(?,?,?,?,?,?,?,?)";
 try
 {
    $statement = $db->prepare($sql);
    $statement->bindparam($title);
    $statement->bindparam($description);
    $statement->bindparam($adtype);
    $statement->bindparam($rdo);
    $statement->bindparam($pageno);
    $statement->bindparam($adsize);
    $statement->bindparam($rate);
    $photo = rand(11,99).rand(11,99).rand(11,99).$_FILES['sample']['name'];
    $statement->bindparam($photo);
    $statement->execute();
    move_uploaded_file($_FILES['sample']['tmp_name'],"../../images/category/$photo");
 }
 catch(PDOException $error)
 {
    LogError($error,__FILE__);
 }
 header("Location:../category.php");
?>