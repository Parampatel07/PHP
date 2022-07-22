<?php
require_once("../connection.php");
// echo "hiee from insert student";
extract($_POST);
print_r($_POST);
if ($gender == 1)
{
    $gender = "Male";
}
else
{
    $gender = "female";
}
if ($studentid!="") {
    echo $studentid,"this is student id";
    $sql="UPDATE student set name=?,class=?,mark=?,gender=? WHERE id=?";
    $statement=$db->prepare($sql);
    $statement->bindparam(1,$name);
    $statement->bindparam(2,$class);
    $statement->bindparam(3,$marks);
    $statement->bindparam(4,$gender);
    $statement->bindparam(5,$studentid);
    $statement->execute();
}
else
{
    $sql = "insert into student (name,class,mark,gender) values(?,?,?,?)";
    try {
        $statement = $db->prepare($sql);
        $statement->bindparam(1, $name);
        $statement->bindparam(2, $class);
        $statement->bindparam(3, $marks);
        $statement->bindparam(4, $gender);
        $statement->execute();
        $laststudentid = $db->lastInsertId();
        echo $laststudentid;
        //  print_r($_POST);
    } catch (PDOException $error) {
        LogError($error, __FILE__);
    }
}
?>