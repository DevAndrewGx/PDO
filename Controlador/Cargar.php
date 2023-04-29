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
            echo "</tr>";
        }
        echo "</table>";

   }
?>