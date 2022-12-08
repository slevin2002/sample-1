<!DOCTYPE html>
<html>
<body>

  <?php
  $n=15;
  for($i=1;$i<=34;$i++)  {    echo "x &nbsp";  }
  echo "<br>";
    for($i=1;$i<=$n;$i++)
    {
      echo "x";
      for($j=1;$j<=$n;$j++)
      {
        if ($i==$j ||$i+$j==$n+1){
         echo "x";
      } else if($j == 8) echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        else{
          echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        }
      }
      echo "x<br>";
    }
for($i=1;$i<34;$i++) {  echo "x &nbsp";}
?>
