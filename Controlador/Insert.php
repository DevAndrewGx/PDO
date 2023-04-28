<?php
    // import the fields
    require_once ('../Modelo/Conexion.php');
    require_once ('../Modelo/Consultas.php');

    $mensaje = null; 
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    
    if(count($nombre) > 0 && count($descripcion) > 0 && count($categoria) > 0 && count($precio) > 0) {
        $consultas = new Conexion();
        $mensaje = $consultas -> addProducs($nombre, $descripcion, $categoria, $precio);
    }else { 
        echo "All fields are necessary :)";
    }

    echo $mensaje;

?>