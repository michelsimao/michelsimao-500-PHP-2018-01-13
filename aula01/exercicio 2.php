<?php

$nota = 7;
$frequencia = 7;

switch(true){
	case($nota < 5 || $frequencia < 8):
		echo "Reprovado";
		break;
	case($nota >= 5 && $nota < 7 && $frequencia >= 8):
		echo "Recuperacao";
		break;
	case($nota >= 7 && $frequencia >= 8):
		echo "Aprovado";
		break;
}