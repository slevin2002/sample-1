<!DOCTYPE html>
<html>
<body>
<?php


 for ($x=1; $x<=5;$x++)

{
echo "<br>";
for ($y=1;$y<=2;$y++)


{
  $r=$x * $y;
  if ($r<=9)

  {
      echo "&nbsp  ";



  }
if ($r<=99)
  {
      echo "&nbsp  ";
  }

  if ($r<=999)
  {
      echo "&nbsp    ";
  }
  if ($r<=9999)
  {
      echo "&nbsp    ";
  }



      echo "$r  &nbsp ";

}
}
 ?>
</body>
</html>
