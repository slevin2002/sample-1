<!DOCTYPE html>
<html>
<body>

<?php
$max=1268;
$cut=8;
$remainder=$max%$cut;
$repeat=($max-$remainder)/$cut;
for ($i=1;$i<=$max;$i++)
{
    echo  $i;
for ($j=1; $j<=$repeat;$j++)
{
  if  ($i==$cut)

  {
      $cut=$cut+8;


    echo "<br>";

 }

}
if($i<=8)
    {echo "&nbsp&nbsp&nbs &nbsp&nbsp&nbsp&nbsp&nbsp ";}
else   if ($i<99)
  {echo "&nbsp &nbsp &nbsp&nbsp";}
  else   if ($i<999)
    {echo "&nbsp&nbsp&nbsp&nbsp";}
else
    {  echo "&nbsp&nbsp";}

}
?>

</body>
</html>
