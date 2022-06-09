<?php
    $param=987987;
    $md5=md5($param);
    echo $md5;
    echo "<br>";
    $password_hash2=password_hash($param,PASSWORD_DEFAULT);
    echo $password_hash2;
    echo"<br>";
    

?>