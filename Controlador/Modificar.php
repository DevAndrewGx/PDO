<?php

    require_once('../Modelo/Consultas.php');
    require_once('../Modelo/Conexion.php');

    $mensaje = null;
    $consultas = new Consultas();
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $Id_producto = $_POST['Id_producto'];

    if(strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($precio) > 0 ) {


        $mensaje = $consultas->modificarProducto("nombre", $nombre,  $Id_producto);
        $mensaje = $consultas->modificarProducto("descripcion", $descripcion, $Id_producto);
        $mensaje = $consultas->modificarProducto("categoria", $categoria, $Id_producto);
        $mensaje = $consultas->modificarProducto("precio", $precio, $Id_producto);

        echo $mensaje;
        
        echo "<div><a href='../verproductos.php'>Ver Producots</div>";
    }else { 
        echo "Please fill the fields";
    }
?>