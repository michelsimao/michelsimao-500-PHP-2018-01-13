<?php 

$i = 0;


while ($i < 100) {
 	echo (($i % 2) == 0) ? $i : "";
 	echo "<br>";

 	$i++;
}

echo "<hr>";

do {
 	echo (($i % 2) == 0) ? "$i = PAR" : "$i = IMPAR";
 	echo "<br>";
 	echo (($i % 5) == 0) ? "$i = Multiplo de 5 <br>" : "";
 	echo "<br>";
 	$i++;
} while ($i < 100);

echo "<hr>";

// for($a=0; $a<=100; $a++){
//  	echo (($a % 2) == 0) ? "$a = PAR" : "$a = IMPAR";
//  	echo "<br>";
//  	echo (($a % 5) == 0) ? "$a = Multiplo de 5 <br>" : "";
//  	echo "<br>";
// }

echo "<hr>";

for($a=0; $a<=100; $a++){
 	echo (($a % 2) == 0) ? "$a = PAR" : "$a = IMPAR";
 	echo "<br>";
 	if(($a % 5 == 0) && $a > 0){
 		echo "$a = Multiplo de 5 <br>";
 	}	
 	echo "<br>";
}
