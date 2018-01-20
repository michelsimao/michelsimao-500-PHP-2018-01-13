<?php 

$nota = 8;
$frequencia = 3;

if($nota < 5 || $frequencia < 8){
	echo "Reprovado";
}elseif($nota >= 5 && $nota < 7 && $frequencia >= 8){
	echo "Recuperacao";
}else{
	echo "Aprovado";
}

