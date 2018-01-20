<?php

echo "<pre>";

function ola(){
	return "Olá funcão2 <br>";
}

function soma(){
	$soma = 2 + 3;
	return $soma;
}


echo ola();

$var = ola();
echo $var;

echo soma();

function soma2($a, $b){
	$soma = $a + $b;
	return $soma;
}

echo "<hr>";

echo soma2(5, 7);