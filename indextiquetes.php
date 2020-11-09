<?php 
$enlace = 'mysql:host=localhost;dbname=id14545015_tiquetes';
$usuario = 'id14545015_tiquetero';
$contraseña='#AwJ5@w5DY=\o~uB';

try {

    $pdo = new PDO($enlace,$usuario,$contraseña);

    //echo 'conectado'; 

  //  foreach($pdo->query('SELECT * FROM `colores`') as $fila) {
    //print_r($fila);
//}

}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die(); 
}

if($_POST){
    
    $agregacion = 'CREATE TABLE nombre_tabla (nombre VARCHAR(20) NOT NULL, listado VARCHAR(20) NOT NULL)';
    $sentencia_agregacion = $pdo->prepare($agregacion);
    $sentencia_agregacion->execute();
     
}
$sql_lectura = 'SELECT * FROM `colores`';
$gsent = $pdo->prepare($sql_lectura);
$gsent->execute();
$resultado = $gsent->fetchAll();
var_dump($resultado);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <form method="POST">
    <input type="text" class="form-control" name="color">
    <input type="text" class="form-control" name="descripcion">
    <button class="btn">crear</button>
    <!--<a href="variable_1.php">
    <div>eliminar</div>
    </a>-->
    <a href="variable_2.php">
        agregar
    </a>

    </form>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
