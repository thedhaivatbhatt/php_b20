<?php
//program to calcultate area of triangle
var_dump($_REQUEST);
extract($_REQUEST);
echo $height;
echo "<br>";
echo $base;
echo "<br>";
$answer = $height*$base/2;
header("location:lec2.php?area=".$answer);
?>