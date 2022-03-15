<?php
    function createtable($align,$border,$width,$color)
    {
        echo"<table align='$align' border='$border' width='$width' bgcolor='$color'>";
    }
    function endtable()
    {
        echo"</table>";
    }
?>