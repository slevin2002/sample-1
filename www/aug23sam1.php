<!DOCTYPE html>
<html>
<body>
  <?php
  $nm=5;
  $i=1;
  echo "<H2><U><B>"."TABLE OF $nm "."<hr/></B></U></H2>";
do
  {
    $r=$nm*$i;
    echo $nm."x".$i."=".$r;
    echo "<br>";
    $i++;

  }
  while ($i<=10)
  ?>
