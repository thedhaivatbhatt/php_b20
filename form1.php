<!-- write a programe to create a simple intrest calcultate -->

<?php
var_dump($_POST);
// amount*rate*year/100
extract($_POST);
echo $amount;
echo "<br>";
echo $intrest;
echo"<br>";
echo $year;
echo "<br>";
$answer = $amount*$intrest*$year/100;
echo "your answer is ".$answer." ." ;
$success="transfer sucessfull";
header("location:simple.php?answer=".$answer."&success=".$success);
?>