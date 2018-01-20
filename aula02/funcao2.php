<?php 

echo "<pre>";

// Funcao que recebe um numero e retorne se ele eh par ou impar
function parImpar($num){
/*	if($num % 2 == 0){
		return "par";
	}else{
		return "impar";
	}*/
	return ($num % 2 === 0) ? "par" : "impar";
}

$a = 1223;
echo "O numero $a eh " . parImpar($a);
echo"<hr>";


// ---------------------------------------------------------------------------
// Funcao que recebe 2 numeros e retorne o maior
function numMaior($a, $b){
	if($a === $b){
		return "sao iguais";
	}elseif($a > $b){
		return $a;
	}else{
		return $b;
	}
}

$b = 100;
$c = 100;
echo $b . " e " . $c . " -> O maior eh: " . numMaior($b, $c);
echo"<hr>";


// ---------------------------------------------------------------------------
// Funcao que recebe um array [nome, idade] e retorna se a pessoa eh maior de idade
function diMaior($array){
	if($array["idade"] >= 18){
		return "$array[nome] eh maior de idade";
	}else{
		return "$array[nome] eh menor de idade";
	}
}

$d = ["nome" => "Joao", "idade" => 15];
echo diMaior($d);
echo"<hr>"; 


// ---------------------------------------------------------------------------
// Funcao que recebe um array [nome, idade, temHabilitacao(boolean)] e retorna se a pessoa pode dirigir
function habilitacao($array){
	if($array["idade"] >= 18 && $array["temHabilitacao"]){
		return "$array[nome] pode dirigir";
	}else{
		return "$array[nome] nao pode dirigir";
	}
}

$e = ["nome" => "Claudia", "idade" => 33, "temHabilitacao" => false];
echo habilitacao($e);
echo"<hr>"; 

//------------------------------------------------------------

function soma(int $f = 0, $g = 1){
	return $f + $g;
}

echo soma("aaa" ,5);




