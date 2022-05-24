<?php
//session start
session_start();
//database connectivity
 require_once("../../inc/connection.php");
 extract($_POST);
 //pdo method of un-named place holder
 $sql="INSERT INTO category (ctitle,description,adtype,subadtype,pageno,adsize,rate,sampleimage) VALUE (?,?,?,?,?,?,?,?)";
 try
 {
    $statement = $db->prepare($sql);
    $statement->bindparam(1,$title);
    $statement->bindparam(2,$description);
    $statement->bindparam(3,$adtype);
    $statement->bindparam(4,$rdo);
    $statement->bindparam(5,$pageno);
    $statement->bindparam(6,$adsize);
    $statement->bindparam(7,$rate);
    $photo = rand(11,99).rand(11,99).rand(11,99).$_FILES['sample']['name'];
    $_SESSION['photo']=$photo;
    $statement->bindparam(8,$photo);
    $statement->execute();
    move_uploaded_file($_FILES['sample']['tmp_name'],"../../images/category/$photo");
    $_SESSION['message'] = 'Category is succesfully inserted';
    
 }
 catch(PDOException $error)
 {
    LogError($error,__FILE__);
 }
 header("Location:../catagory.php");
?>
<!-- yimigi8299@topyte.com -->
<!-- pass word = parampatel14445 -->