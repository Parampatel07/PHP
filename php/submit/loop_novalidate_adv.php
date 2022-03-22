<?php
session_start();
require_once("../inc/function.php");
// including vendor autoload to use rakit validation
require_once("../../vendor/autoload.php");

use Rakit\Validation\Validator;
    
$validator = new Validator;

$validation = $validator->make($_POST, [
    'row'                  => 'required|max:100|min:1|numeric',
    'colum'                 => 'required|max:100|min:1|numeric',
    'loop'              => 'required|numeric|min:1|max:3',
]);
$validation->validate();
if ($validation->fails()) {
    // handling errors
    $errors = $validation->errors();
    $_SESSION['errors']=serialize(($errors->firstOfAll()));

     //USing library method to get the valid data 
     $validData = $validation->getValidData();
     $_SESSION['inputs'] = serialize($validData);
     
     //Transfer user to another page
    header("Location:../input_novalidate_adv.php");
    exit;
} else {
    // validation passes
    $row = $colum =  $loop = null;
    $row = $_POST['row'];
    $colum = $_POST['colum'];
    $loop = $_POST['loop'];
    // echo "rows = $row colum = $colum loop = $loop";
    $align = $width = $color = $border = null;
    switch ($loop) {
        case 1:
            echo "<h1> Table Using While Loop </h1>";
            createtable('center', 4, '80%', 'red');
            $count_row = 0;
            $count_colum = 0;
            while ($count_colum <= $colum) {
                echo "<tr height='10px' border='1'>";
                while ($count_row <= $row) {
                    echo "<td height='10px'>100";
                    echo "</td>";
                    $count_row = $count_row + 1;
                }
                echo "</tr>";
                $count_row = 0;
                $count_colum = $count_colum + 1;
            }
            endtable();
            break;
        case 2:
            echo "<h1>Table using For loop</h1>";
            createtable('center', 4, '80%', 'green');
            for ($count_colum = 0; $count_colum <= $colum; $count_colum = $count_colum + 1) {
                echo "<tr height='10px' border='1'>";
                for ($count_row = 0; $count_row <= $row; $count_row = $count_row + 1) {
                    echo "<td height='10px'>100";
                    echo "</td>";
                }
                echo "</tr>";
            }
            endtable();
            break;
        case 3:
            echo "<h1>Table using Do while</h1>";
            createtable('center', 4, '80%', 'pink');
            $count_row = $count_colum = 0;
            do {
                echo "<tr height='10px' border='1'>";
                do {
                    echo "<td height='10px'>100";
                    echo "</td>";
                    $count_row = $count_row + 1;
                } while ($count_row <= $row);
                echo "</tr>";
                $count_row = 0;
                $count_colum = $count_colum + 1;
            } while ($count_colum <= $colum);
            endtable();
            break;
    }
}
