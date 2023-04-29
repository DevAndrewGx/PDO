<?php
    require_once('Modelo/Consultas.php');
    require_once('Modelo/Conexion.php');
    require_once('Controlador/Seleccionar.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modificar Producto</h1>
    <?php
        seleccionar();
    ?>
</body>
</html>