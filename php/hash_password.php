<?php
    $param=987987;
    $md5=md5($param);
    echo $md5;
    echo "<br>";
    $password_hash1=password_hash($param,PASSWORD_BCRYPT);
    $password_hash2=password_hash($param,PASSWORD_DEFAULT);
    echo $password_hash2;
    echo"<br>";
    echo $password_hash1;
    echo "<br>";
    $password=986962;
    $ismatch =password_verify($password,$password_hash1);
    echo $ismatch;

?>