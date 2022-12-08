<!DOCTYPE html>
<html>
<body>
<?php
$p=20;
ob_start();
$buffer = str_repeat("  ",4096);//fill the EventBuffer
$sleep = 0.5; //sleep one second between output chars
for($s=1;$s<=10;$s++)
{
  for($y=1;$y<=$p;$y++)
  {
    echo "&nbsp";
  }
  $p=$p-2;
  for($t=1;$t<=$s;$t++)
  {

    echo "X&nbsp&nbsp&nbsp";
//delay code starting
    echo $buffer ;
    ob_flush();
    flush();
    sleep (0.5);
  //delay code ending
}
  echo "<br>";
}
  //Reverse
$z=3;
for($rs=9;$rs>=1;$rs--)
{
  $z=$z+2;
  for($y=2;$y<=$z;$y++)
  {
    echo "&nbsp";
  }
  for($rt=1;$rt<=$rs;$rt++)
  {
    echo "X&nbsp&nbsp&nbsp";



echo $buffer ;
  ob_flush();
  flush();
  sleep (0.5 );
}
  echo "<br>";
}
?>
</body>
</html>
