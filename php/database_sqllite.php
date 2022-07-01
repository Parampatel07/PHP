<?php
require_once("connection.php");
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('XCOMP8.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   $sql =<<<EOF
   SELECT * from caste
EOF;
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      $castecode_2= $row['castecode'];
      $castename2= $row['castename'];
      $enrtyuser_2= $row['entryuser'];
      $edituser_2= $row['edituser'];
     echo $castecode_2. "  " .$castename2."  ".$enrtyuser_2."  ".$edituser_2."<br>";
   }
   echo "Operation done successfully\n";
   $db->close();

   
?>
