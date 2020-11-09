<?php

include_once 'indextiquetes.php';

$color="rojo";
echo $color;
$descripcion = "buenos dias";
echo $descripcion;

$agregacion = 'INSERT INTO nombre_tabla (nombre,listado) VALUES (?,?)';
$sentencia_agregacion = $pdo->prepare($agregacion);
$sentencia_agregacion->execute(array($color,$descripcion));

header('location:indextiquetes.php');