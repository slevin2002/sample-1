
<!DOCTYPE html>
<html>

<body>

<?php
$sports =array("football" ,"cricket" , "volly ball" ,"kabaddi" , "basket ball");
echo "my favowrite game are:".$sports[0].",".$sports[1].",".$sports[2].",".$sports[3]." and  ".$sports[4]."<hr/>";
for ($x=0; $x<=4; $x++)
{echo "the number is: $x <br>";}
echo "<hr/>";
//Associative Arrays
$tscore =array("john"=>"60", "Bill"=>"80" , "Dan"=>"75");
echo "Bill scored " .$tscore['Bill']."/100 <br>";
echo "<hr/>";
echo "john scored " .$tscore['john']."/100 <br>";
echo "<hr/>";
echo "Dan scored " .$tscore['Dan']."/100 <br>";
echo "<hr/>";
// Loop through an associative array
foreach ($tscore as $x=>$score)
{
  echo "key= ".$x. "score= ".$score;
echo "<br>";
}

?>
</body>
</html>
