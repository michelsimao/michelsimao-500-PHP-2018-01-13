<?php

$temperaturas = [
		"2008" =>	[
						"Janeiro" => 30,
						"Fevereiro" => 31
					],
		"2009" =>	[
						"Março" => 32,
						"Abril" => 33
					],
		"2010" =>	[
						"Maio" => 34,
						"Junho" => 35
					]								
];

echo "<pre>";
print_r($temperaturas);

echo "<hr>";

foreach ($temperaturas as $ano => $meses) {
	echo "<strong>$ano</strong>:<br>";
	foreach ($meses as $mes => $temp) {
		echo "$mes: $temp<br>";
	}

}