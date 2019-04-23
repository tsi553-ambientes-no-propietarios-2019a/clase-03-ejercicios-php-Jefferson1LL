ejercicio5
<?php
$aleatorio = rand(1,100);
$numero = 50;
echo $aleatorio;	
echo "<br>";
if ($aleatorio < $numero) {
    echo "$aleatorio es menor que $numero";
    echo "<br>";
		}elseif ($aleatorio == $numero){
    	echo "$aleatorio es igual que $numero";
    	echo "<br>";
		}else{
    		echo "$aleatorio es mayor que $numero";
}
/**
 Sabiendo que la función rand nos retorna un valor aleatorio entre un rango de dos enteros:
$num=rand(1,100);
En la variable $num se almacena un valor entero que la computadora genera en forma aleatoria entre 1 y 100.
Hacer un programa que lo muestre por pantalla al valor generado. Mostrar además si es menor o igual a 50 o si es mayor.
Para imprimir el contenido de una variable también utilizamos el comando echo:
echo $num;
 */
?>