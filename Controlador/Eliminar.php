<?php
    require_once('../Modelo/Consultas.php');
    require_once('../Modelo/Conexion.php');


    if(isset($_GET['Id_producto'])) {
        $Id_producto = $_GET['Id_producto'];
        $consultas = new Consultas();
        $mensaje =  $consultas-> eliminarProducto($Id_producto);
        echo $mensaje;

        echo "<div><a href='../verproductos.php'>Volver a mis productos</a></div>";
    }else { 
        echo "it couldn't find ";
    }
   

?>