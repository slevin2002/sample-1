<!DOCTYPE html>
<html>
<body>
<?php

$x=1;
while ( $x<=50)
{
echo "<br>";
$y=1;
while ($y<=20)
{
  $r=$x * $y;
  if($r<=9)
  {      echo "&nbsp  ";  }
if ($r<=99)
  {      echo "&nbsp  ";   }
  if ($r<=999)
  {      echo "&nbsp    ";   }
  if ($r<=9999)
  {      echo "&nbsp    ";  }
  if ($r<=99999)
  {      echo "&nbsp    ";  }
      echo "$r  &nbsp ";
$y++;
}
$x++;
}
 ?>
</body>
</html>
