<!DOCTYPE html>
<html>
<body>

<?php
$cm = array("Andhra Pradesh "=>"Jagan Mohan Reddy ", "Arunachal Prades "=>"Pema Khandu ", "Assam "=>"Himanta Biswa Sarma ", "Bihar "=>"Nitish Kumar ", "Chhattisgarh "=>"Bhupesh Baghel ",);

foreach($cm as $x => $x_value) {
  echo "indian state ministers = " . $x . ", name = " . $x_value;
  echo "<br>";
}
?>

</body>
</html>
