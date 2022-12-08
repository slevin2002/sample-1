<!DOCTYPE html>
<html>
<body>
<?php
$max1=15;
for($i=1;$i<=$max1;$i++)
 {
   $max2=$i;
for($j=1;$j<=$max2;$j++)
if($i<=9){echo "$i&nbsp&nbsp&nbsp";}
else {echo "$i&nbsp";}
echo "<br>";
 }
for($ri=14;$ri>=1;$ri--)
 {
for($rj=1;$rj<=$ri;$rj++)
if($ri<=9){echo "$ri&nbsp&nbsp&nbsp";}
else {echo "$ri&nbsp";}
echo "<br>";
 }
?>
</body>
</html>