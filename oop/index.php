<?php 
require "animal.php";
require "Frog.php";
require "Ape.php";

$sheep = new Animal("shaun");

echo $sheep->name."<br/>"; // "shaun"
echo $sheep->legs."<br/>"; // 2
echo $sheep->cold_blooded."<br/>"; // false


$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"

echo "<br/>";
$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"

?>