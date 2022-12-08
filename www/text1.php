<!DOCTYPE html>
<html>
<body>
<?php
$p=20;
ob_start();
$buffer = str_repeat("  ",4096);//fill the EventBuffer
$sleep = 1; //sleep one second between output chars

for($s=1;$s<=10;$s++)
{
 for($y=1;$y<=$p;$y++)
  {
   echo "&nbsp";
  }
$p=$p-2;
  for($t=2;$t<=$s;$t++)
  {
    echo "x&nbsp&nbsp&nbsp";
 //($s<=9){echo "x&nbsp&nbsp&nbsp";}
//  else {echo "x&nbsp&nbsp&nbsp";}
//delay code starting
    echo $buffer ;
    ob_flush();
    flush();
    //sleep (1);
    usleep($sleep*500000);
  //delay code ending
}
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
  if($rs<=9){echo "x&nbsp&nbsp&nbsp";}
  else {echo "x&nbsp";}
  echo "<br>";
}
?>
</body>
</html>
