<!DOCTYPE html>
<html>
<body>

<?php
echo "No &nbsp&nbsp&nbsp&nbsp&nbspSQ&nbsp&nbsp&nbsp&nbsp&nbsp CQ &nbsp&nbsp&nbspSQRT.&nbsp&nbsp&nbsp&nbsp";
echo "<br>";
for($i=1;$i<=20;$i++)
{
  $sql=$i*$i;
  $cq=$i**3;
  $srt=sqrt($i);
echo "$i&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $sql&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $cq&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp $srt<br>";

}
?>
