<?php 


for($a=0; $a<=100; $a++){
	if(($a % 3) == 0){
		continue;
	}
	if($a === 77){
		break;
	}
 	echo (($a % 2) == 0) ? "$a = PAR" : "$a = IMPAR";
 	echo "<br>";
 	if(($a % 5 == 0) && $a > 0){
 		echo "$a = Multiplo de 5 <br>";
 	}	
 	echo "<br>";
}
