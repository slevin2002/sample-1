<!DOCTYPE html>
<html>
<body>
<?php
/*for($y=1;$y<=5;$y++)

{
  echo "y=$y<br>";*/
  ob_start();
  $buffer = str_repeat(" ", 4096);//fill the buffer

  for($i=0;$i<=100;$i++)
  {
    echo $buffer . $i;
    echo"<br>";
    ob_flush();
    flush();
  sleep(1);
  }

//}

//
//for($i=1;$i<=100000000;$i++)
//{
//  echo "i=$i<br>";
//}
//}





//echo '<script type="text/javascript">
//prompt("GreeksForGreeks");
//</script>'
//;

?>
</body>
</html>
