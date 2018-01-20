<?php 

$idade = 15;
$temHabilitacao = false;

if ($idade >= 18 && $temHabilitacao) {
	echo "Pode dirigir";
}elseif($idade <= 18 && !$temHabilitacao){
	echo "Nao pode dirigir";
}
