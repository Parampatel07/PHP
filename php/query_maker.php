<?php

function create_insert_query($tablename, $array) {
    $key = array_keys($array);
    $val = array_values($array);
    //sanitation needed!
    $query = "INSERT INTO $tablename (" . implode(', ', $key) . ") "
         . "VALUES ('" . implode("', '", $val) . "')";

    return($query);
}
?>