<!DOCTYPE html>
<html>
<body>

<?php
ob_start();
$buffer = str_repeat(" ", 4096);
$letters= array ("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
for($i=0;$i<26;$i++)
{

  $l=$letters[$i];
  $ul=strtoupper($l);

  echo $ul."&nbsp";

echo   '<p id="abc" style="color:blue;font-family: jockerman;">"$ul.&nbsp"</p>

  <script type="text/javascript">
      var blink =
        document.getElementById("abc");

    setInterval(function () {
        blink.style.opacity =
        (blink.style.opacity == 0 ? 1 : 0);
      }, 100);
  </script>';

 echo $buffer ;
//  echo"<br>";
  ob_flush();
  flush();

sleep(1);}
echo "<br>";
 //echo $letters[$i];
  //echo "&nbsp";
  for($i=0;$i<26;$i++)
  {

    $l=$letters[$i];
    $ul=strtolower($l);

    echo $ul."&nbsp";
    echo $buffer ;
  //  echo"<br>";
    ob_flush();
    flush();

  sleep(1);
}

?>
</body>
</html>
