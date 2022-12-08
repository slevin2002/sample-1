<!DOCTYPE html>
<html>
<body>
  <?php
  $cars = array("<B>"."BMW"=>"130","BENZ"=>"600","BUGATI"=>"550","LAMBORGNI"=>"220","GT"=>"220",
  "MAZTHAG"=>"250","FERRAI"=>"280","PORSHE"=>"250","HAMMER"=>"80","LAND ROVER"=>"190"."<B/>");
  foreach($cars as $x=>$x_value)
  {
    if ($x_value < 500)
  {
continue;
    echo "$x IS USE LESS CAR "."<br>.<hr/>";
}
  else

{
    echo "MY CAR IS = $x,<br>" ;
    echo "SPEED IN SECONDS ="." $x_value";
    echo "<br><hr/>";
  }
}
  ?>
</body>
</html>
