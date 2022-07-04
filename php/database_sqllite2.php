<!-- to run this page successfully uncomment line no.36 and line no.62 -->
<?php
require_once("connection.php");
$seconds = 0;
set_time_limit($seconds);
function create_insert_query($tablename, $array)
{
   $key = array_keys($array);
   $val = array_values($array);
   //sanitation needed!
   $query = "INSERT INTO $tablename (" . implode(', ', $key) . ") "
      . "VALUES ('" . implode("', '", $val) . "')";

   return ($query);
}
class MyDB extends SQLite3
{
   function __construct()
   {
      $this->open('XCOMP7.db');
   }
}
$db20 = new MyDB();
if (!$db20) {
   echo $db20->lastErrorMsg();
} else {
   echo "Opened database successfully <br>";
}
$tab_query="SELECT TABLE_NAME 
FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='param_school_7'";
$tab_statement=$db->prepare($tab_query);
$tab_statement->setfetchmode();
$tab_statement->execute();
$tab_name=$tab_statement->fetchall();
var_dump($tab_name);
$table="user";
$sql = <<<EOF
   SELECT * from $table;
   EOF;
   $ret = $db20->query($sql);
   $truncate="TRUNCATE TABLE $table";
   $trun_que=$db->prepare($truncate);
   // $trun_que->execute();
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
   // var_dump($row);
   // $key_array = array_keys($row);
   // var_dump($key_array);
   // $value_array = array_values($row);
   // // var_dump($value_array);
   // echo sizeof($row) . "<br>";
   // echo $row[36];
   $tablename = $table;
   $sql40 = Create_insert_query($tablename, $row);
   echo $sql40;
   // $count=0;
   // while($count<(sizeof($row)-1))
   // {
   //    // echo $count." ";
   //    $count++; 
   //    echo $key_array[$count]." ".$value_array[$count]."<br>";
   // }
   //    $cosetupid_2= $row['cosetupid'];
   //    $coname_2= $row['coname'];
   //    $fyfrom_2= $row['fyfrom'];
   //    $fyto_2= $row['fyto'];
   // //   echo $castecode_2. "  " .$castename2."  ".$enrtyuser_2."  ".$edituser_2."<br>";
   try{
      $statement=$db->prepare($sql40);
      // $statement->execute();
      echo"Query instered successfullly <br>";
   }
   catch(PDOException $error)
   {
      LogError($error,__FILE__);
   }
}
echo "Operation done successfully\n";
$db20->close();