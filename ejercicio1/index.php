<?php
	
	echo "/* ejemplo for */";
	echo "<br>";
	$n= 2;
	for ($i=1; $i<11 ; $i++) {
		
		echo "$n X $i =" .$n * $i;
		echo '<br>';
		
	}
	echo "<br>";
	echo "/* ejemplo while */";
	echo "<br>";
	$i = 1;
	while ($i <= 10) {
	    echo "$n X $i =" .$n * $i;
		echo '<br>';
		$i++; 
	}
	echo "<br>";
	
	echo"/* ejemplo do/while */";
	echo '<br>';
	$i = 1;
	do {
		echo "$n X $i =" .$n * $i;
		echo '<br>';
		$i++;
	} while ( $i <= 10);
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
?>