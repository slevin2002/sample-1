<?php
$message = "Hello again!";
echo $message;
echo "<hr/>";
$sports= "football";
echo "i like $sports";
echo "<hr/>";
$sports= "football";
echo "i like" , $sports , "!";
echo "<hr/>";
$message = "Hello 2 again!";
echo $message;
echo "<hr/>";

$count =3;

echo $count;
echo "<hr/>";

$price =1.99;

echo $price;
echo "<hr/>";

var_dump($message);
echo "<hr/>";
var_dump($count);
echo "<hr/>";
var_dump($price);
echo "<hr/>";
$is_admin=false;
$data =null;
echo "$is_admin";
echo "$data";
$price=2.95;
echo "<br/>";
$quantity= 5;
echo "<br/>";
var_dump ($price * $quantity);
echo "<br/>";
echo $price * $quantity;
echo "<br/>";
$message =" Hello ";
$name =" Dave ";
echo "<br/>";

echo $message ;
echo  $name;
echo "<br/>";

$is_editor = true;
$is_admin =false;

var_dump($is_editor or $is_admin);
echo "<br/>";

var_dump($is_editor and $is_admin);
echo "<br/>";

var_dump(!$is_editor);
echo "<br/>";
echo "is_editor or is_admin :   ";
var_dump($is_editor || $is_admin);
echo "<br/>";
echo "is_editor or is_admin :   ";
echo ($is_editor || $is_admin);
echo "<br/>";

var_dump($is_editor && $is_admin);
echo "<br/>";


?>
