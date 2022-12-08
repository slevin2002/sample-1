<!DOCTYPE HTML>
<html>
<body>
<?php
$n=15;
for($i=1;$i<=$n;$i++)
{
  for($j=1;$j<=$n;$j++)
  {
    if ($i==$j ||$i+$j==$n+1){
    echo "$i";
  } else{
    echo "&nbsp&nbsp&nbsp&nbsp";
}
}
echo "<br>";
}
?>
</body>
</html>
