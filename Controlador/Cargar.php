<?php 
   function cargar() { 
        $consultas = new Consultas();
        $filas = $consultas -> reloadProducts();

        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                </tr>";

        foreach ($filas as $fila) { 
            echo "<tr>";
            echo "<td>".$fila['Id_producto']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['descripcion']."</td>";
            echo "<td>".$fila['categoria']."</td>";
            echo "<td>".$fila['precio']."</td>";
            echo "<td><a href='Controlador/eliminar.php?Id_producto=".$fila['Id_producto']."'>Eliminar</td>";
            echo "<td><a href='modificar.php?Id_producto=".$fila['Id_producto']."'>Modificar</td>";
            echo "</tr>";
        }
        echo "</table>";
   }

   function buscar($nombre) { 
        $consultas = new Consultas();
        $filas = $consultas -> buscarProductos($nombre);

        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                </tr>";

        if(isset($filas)) {
            foreach ($filas as $fila) { 
                echo "<tr>";
                echo "<td>".$fila['Id_producto']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['descripcion']."</td>";
                echo "<td>".$fila['categoria']."</td>";
                echo "<td>".$fila['precio']."</td>";
                echo "<td><a href='Controlador/Eliminar.php?Id_producto=".$fila['Id_producto']."'>Eliminar</td>";
                echo "<td><a href='modificar.php?Id_producto=".$fila['Id_producto']."'>Modificar</td>";
                echo "</tr>";
            }
        }
        echo "</table>";  
   }
?>