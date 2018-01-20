<?php

// Exibir nome completo de cada pessoas 
// Exibir idade de cada pessoa
// Exibir nome completo das pessoas maiores de idade
// Exibir nome completo e idade das pessoas com peso maior que 80kg;

echo "<pre>";

$pessoas = [
		[
			"nome" => "Joao",	
			"sobrenome" => "Silva", 
			"idade" => 15, 
			"peso" => 70.5 
		],
		[
			"nome" => "Maria", 
			"sobrenome" => "Oliveira", 
			"idade" => 20, 
			"peso" => 47 
		],
		[
			"nome" => "Pedro", 
			"sobrenome" => "Fernandes", 
			"idade" => 37, 
			"peso" => 97.8 
		]
];

print_r($pessoas);

echo "<hr>";

foreach($pessoas as $pessoa){
	echo $pessoa["nome"] . " " . $pessoa["sobrenome"] . "<br>";
}

echo "<hr>";

foreach($pessoas as $pessoa){
	echo "$pessoa[nome] $pessoa[sobrenome] <br>";
}

echo "<hr>";

foreach($pessoas as $pessoa){
	echo $pessoa["idade"] . "<br>";
}

echo "<hr>";

foreach($pessoas as $pessoa){
	if($pessoa["idade"] >= 18){
		echo "$pessoa[nome] $pessoa[sobrenome] <br>";
	}
}

echo "<hr>";

foreach($pessoas as $pessoa){
	if($pessoa["peso"] > 80){
		echo "$pessoa[nome] $pessoa[sobrenome] : $pessoa[peso] <br>";
	}
}
