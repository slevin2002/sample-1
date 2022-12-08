<!DOCTYPE html>
<html>
<body>
<?php
$max1=9;
for($i=1;$i<=$max1;$i++)
 {
   $max2=$i;
   echo "<br>";
for($j=1;$j<=$max2;$j++)
  {
    echo " $i &nbsp ";
  }
 }
for($ri=8;$ri>=1;$ri--)
 {
    echo "<br>";
for($rj=1;$rj<=$ri;$rj++)
  {
    echo " $ri &nbsp ";
  }
 }
?>
