<?php

$soma = function(){ return 2+2; };
echo $soma();
echo "<hr><pre>";

$msg = "Ola";
$func = function() use ($msg){

};

var_dump($soma);

echo "<hr>";

$array = array(6, 7, 8, 9, 10, 11);

print_r(array_filter($array, function($valor){
	if($valor % 2 != 0){
		return $valor;
	}
}));