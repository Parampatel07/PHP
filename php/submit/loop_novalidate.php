<?php
 require_once("../inc/function.php");
$row = $colum =  $loop = null ; 
$row = $_POST['row'];
$colum= $_POST['colum'];
$loop= $_POST['loop'];
// echo "rows = $row colum = $colum loop = $loop";
$align = $width = $color = $border = null;
    switch($loop)
    {
        case 1:
            echo "<h1> Table Using While Loop </h1>";
            createtable('center',4,'80%','red');
            $count_row = 0;
            $count_colum = 0; 
            while($count_colum<=$colum)
            {
                echo "<tr height='10px' border='1'>";
                while($count_row<=$row)
                {
                    echo "<td height='10px'>100";
                    echo "</td>";
                    $count_row = $count_row + 1 ;
                }
                echo "</tr>";
                $count_row = 0;
                $count_colum = $count_colum + 1;
            }
            endtable();
        break;
        case 2:
            echo"<h1>Table using For loop</h1>";
            createtable('center',4,'80%','green');
            for($count_colum = 0;$count_colum<=$colum;$count_colum = $count_colum + 1)
            {
                echo "<tr height='10px' border='1'>";
                for( $count_row = 0;$count_row<=$row;$count_row = $count_row + 1 )
                {
                    echo "<td height='10px'>100";
                    echo "</td>";
                }
                echo "</tr>";
            }
            endtable();
        break;
        case 3:
            echo"<h1>Table using Do while</h1>";
            createtable('center',4,'80%','pink');
            $count_row = $count_colum = 0 ;
            do
            {
                echo "<tr height='10px' border='1'>";
                do
                {
                    echo "<td height='10px'>100";
                    echo "</td>";
                    $count_row = $count_row + 1 ;
                }while($count_row<=$row);
                echo "</tr>";
                $count_row = 0;
                $count_colum = $count_colum + 1;
            }while($count_colum<=$colum);
            endtable();
        break;
    }
?>