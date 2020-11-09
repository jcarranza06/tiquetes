<?php

include_once 'indextiquetes.php';

//$color_1 = $_POST['color'];
//$descripcion_1 = $_POST['descripcion'];

//echo $color_1;

//echo $descripcion_1;

//$agregacion_1 = 'INSERT INTO nombre_tabla (nombre,listado) VALUES (?,?)';
//$sentencia_agregacion_1 = $pdo->prepare($agregacion_1);
//$sentencia_agregacion_1->execute(array($color_1,$descripcion_1));


echo $color_1;

echo $descripcion_1;

$agregacion_1 = 'DROP TABLE nombre_tabla';
$sentencia_agregacion_1 = $pdo->prepare($agregacion_1);
$sentencia_agregacion_1->execute();

?>