<?php
    require_once('Modelo/Consultas.php');
    require_once('Modelo/Conexion.php');
    require_once('Controlador/Cargar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver productos</title>
</head>
<body>
    <h1>Mis productos</h1>
    <?php
        cargar();
     ?>

     <!-- new product -->
     <div><a href="Insert.html">Nuevo Producto</a></div>
</body>
</html>