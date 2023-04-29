<?php
    // import the fields
    require_once('../Modelo/Consultas.php');
    require_once('../Modelo/Conexion.php');
   

    $mensaje = null; 
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    
    if(strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($precio) > 0) {
        $consultas = new Consultas();
        $mensaje = $consultas -> insertarProductos($nombre, $descripcion, $categoria, $precio);

        // new product
        echo "<a href='../insert.html'>Nuevo Producto </a><br>";
        echo "<a href='../verproductos.php'>Ver productos</a><br><br>";
    }else { 
        echo "All fields are necessary :)";
        echo "<a href='../insert.html'>Nuevo Producto </a>";
    }

    echo $mensaje;
?>