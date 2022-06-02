<?php
require_once("../../inc/connection.php");
require_once("../include/verify_login.php");
extract($_POST);
// var_dump($_POST);
// var_dump($_FILES);
$sql = "UPDATE template set categoryid=?,title=?,description=?,image=? where id=?";
try {
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $catagory);
    $statement->bindparam(2, $title);
    $statement->bindparam(3, $description);
    if (strlen($_FILES['sample']['name']) >= 1) {
        $photo = rand(0, 99) . rand(0, 99) . rand(0, 99) . $_FILES['sample']['name'];
        move_uploaded_file($_FILES['sample']['tmp_name'], "../../images/template/$photo");
        unlink("../../images/template/$oldphoto");
    } else {
        $photo=$oldphoto;    
    }
    $statement->bindparam(4, $photo);
    $statement->bindparam(5, $templateid);
    $statement->execute();
    // echo " updated successfully";
    $_SESSION['message']="Template updated successfully";

} catch (PDOException $error) {
    LogError($error, __FILE__);
}
header("location:../design_template.php");