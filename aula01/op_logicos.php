<?php

$var1 = true;
$var2 = false;
$var3 = true;
$var4 = false;

var_dump($var1 and $var2);
echo "<hr>";
var_dump($var1 and $var3);
echo "<hr>";
var_dump($var1 && $var4);
echo "<hr>";
var_dump($var2 && $var4);
echo "<hr>";

var_dump($var1 or $var2);
echo "<hr>";
var_dump($var1 or $var3);
echo "<hr>";
var_dump($var1 || $var4);
echo "<hr>";
var_dump($var2 || $var4);
echo "<hr>";
var_dump($var3 || $var4);
echo "<hr>";

var_dump($var1 xor $var2);
echo "<hr>";
var_dump($var1 xor $var3);
echo "<hr>";
var_dump($var1 xor $var4);
echo "<hr>";
var_dump($var2 xor $var4);
echo "<hr>";

echo "<hr>";
var_dump(!true);
echo "<hr>";
var_dump(!false);