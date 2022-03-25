<?php
function displayarray($array)
{
    echo "<hr>";
    print_r($array);
    echo "<hr>";
}
function loop($arr)
{
    echo "<hr>";
    foreach($arr as $key=>$value)
    {
        echo"$key = $value <br>";
    }
    echo "<hr>";
}
$data = array("Param",18,44.48,true);
displayarray($data);
unset($data[2]);
displayarray($data);
$data[] = "The Easylearn Academy ";
$data[] = "9016293308";
$data[] = "Param Patel";
displayarray($data);
$family = array(
    array("jeet",15,45.45),
    array("jeel",19,22.56),
);
displayarray($family);
$subject = array("subject"=>"Science","mark"=>19,"mark2"=>16);
displayarray($subject);
// unset($subject['mark2']);
displayarray($subject);
loop($data);
loop($subject);
$number=array(12,45,989,15,356,845,10005);
$name=array("Param","jeet","jeel","hemil");
sort($number,SORT_NUMERIC);
displayarray($number);
sort($name,SORT_STRING);
displayarray($name);
echo "size of number".sizeof($number);
?>