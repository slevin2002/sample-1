<!DOCTYPE html>
<html>
<body>
<?php
$p=20;
for($s=1;$s<=10;$s++)
{
 for($y=1;$y<=$p;$y++)
  {
   echo "&nbsp";
  }
$p=$p-2;
  for($t=2;$t<=$s;$t++)
 if($s<=9){echo "$"."&nbsp&nbsp&nbsp";}
  else {echo "&nbsp";}
  echo "<br>";
}
$x=2;
  for($rs=9;$rs>=1;$rs--)
   {
     $x=$x+2;
     for($y=1;$y<=$x;$y++)
    {
       echo "&nbsp";
  }
  for($rt=1;$rt<=$rs;$rt++)
  if($rs<=9){echo "$"."&nbsp&nbsp&nbsp";}
  else {echo "$rs&nbsp";}
  echo "<br>";
}
?>
</body>
</html>
