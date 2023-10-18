<?php 
$bool=TRUE;
$str="tekst";
$int=150;
$pi=3.141;
$a=0x352A;

echo gettype($bool) . PHP_EOL;
echo gettype($str) . PHP_EOL;
echo gettype($int) . PHP_EOL;
echo "<p>". gettype($pi) . PHP_EOL . "</p>";
echo "<p>". $a . PHP_EOL . gettype($a) . PHP_EOL . "</p>";
?>