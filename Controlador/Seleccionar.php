<?php

    function seleccionar() { 
        
        if(isset($_GET['Id_producto'])) {
            $consultas = new Consultas();
            $Id_producto = $_GET['Id_producto'];
            $filas = $consultas -> cargarProductos($Id_producto);

            foreach($filas as $fila) { 
                 echo '
                <form action = "Controlador/Modificar.php" 
                 method="post">
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text"          name="nombre" value="'.$fila['nombre'].'"></td>
                        </tr>
                        <tr>
                            <td>Descripcion:</td>
                            <td><textarea name="descripcion"            cols="30" rows="10">value="'.$fila['descripcion'].'"</textarea></td>
                        </tr>
                        <tr>
                            <td>Categoria:</td>
                            <td><input type="text"          name="categoria" value="'.$fila['categoria'].'"></td>
                        </tr>
                        <tr>
                            <td>Precio:</td>
                            <td><input type="text"          name="precio" value="'.$fila['precio'].'"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="hidden" name="Id_producto" value="'.$Id_producto.'"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" value="Modificar producto"></td>
                        </tr>
                    </table>
                </form>
            ';
            }
        }
    }
   
?>