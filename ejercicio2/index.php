ejercicio2
<?php
function frase(){
    $texto = 'Ambientes No Propietarios Ejercicio 2 ';
    for($i = 0 ; $i <= 2 ; $i++){
        echo "$texto";
        echo "<br>";
    };
}
?>


<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Ejercicio 2</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	    <script src="main.js"></script>
	</head>
<body>
 

<?php  
echo "<div align=center>";
echo frase();
echo "</div><br>";
?>

</body>
</html>
<?php
/**
 * Problema propuesto:
 * Implementar una función que muestre un título centrado en * pantalla, y la llamaremos posteriormente dos veces.
*/
?>