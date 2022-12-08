<!DOCTYPE html>
<html>
<body>
  <?php
  $nm=1;
  do
{
  $i=1;
    echo "<i><H2><U><B>"."TABLE OF :- $nm "."<hr/></B></U></H2></i>";
do
 {
    $r=$nm*$i;
    echo $nm."x".$i."=".$r;
    echo "<br>";
    $i++;
  }
  while ($i<=5);
   $nm++;
}
while ($nm<=4);
?>
