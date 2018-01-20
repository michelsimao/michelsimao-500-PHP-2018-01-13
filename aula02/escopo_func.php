<?php

$pessoa = ["nome" => "Lucas", "idade" => 24];

function exibeNome(){
	global $pessoa;
	//return $pessoa["nome"];
	$pessoa["idade"] = 32;
	return $pessoa["idade"];
}

echo exibeNome();