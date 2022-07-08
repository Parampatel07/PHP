<?php
require_once("../connection.php");
// echo "hiee from insert student";
extract($_POST);
//print_r($_POST);
$sql="insert into student (name,class,mark,gender) values(?,?,?,?)";
try{
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$name);
    $statement->bindparam(2,$class);
    $statement->bindparam(3,$marks);
    if($gender==1)
        $gender="Male";
    else
        $gender="female";
    $statement->bindparam(4,$gender);
    $statement->execute();
    $studentid=$db->lastInsertId();
    echo $studentid;
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
?>