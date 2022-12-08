<!DOCTYPE html>
<html>
<body>
<?php
$i=2;
$x=0;
$y=1;
echo $x; echo "<br>";
echo $y; echo "<br>";
while ($i<=10)
{
  $r=$x+$y;
  echo $r;echo "<br>";
$x=$y;
$y=$r;
$i++;

}
?>
</body>
</html>
