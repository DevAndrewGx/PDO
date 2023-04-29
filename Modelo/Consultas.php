<?php
    class Consultas{
        public function insertarProductos($arg_name, $arg_description, $arg_category, $arg_price) {
            $model = new Conexion();
            $conexion = $model -> get_conexion();

            //Query
            $sql = "INSERT INTO productos (nombre, descripcion, categoria, precio) values (:nombre, :descripcion, :categoria, :precio)";

            // Let's prepare the query
            $statement = $conexion -> prepare($sql);

            $statement->bindParam(':nombre', $arg_name);
            $statement->bindParam(':descripcion', $arg_description);
            $statement->bindParam(':categoria', $arg_category);
            $statement->bindParam(':precio', $arg_price);

            // We verfic if statement has not anything

            if(!$statement) {
                return "Error is not posible to create the field";
            }else { 
                $statement ->execute();
                return "Register succesfuly";
            }
        }

        public function reloadProducts() { 
            $rows = null;
            $model = new Conexion();
            $conexion = $model -> get_conexion();
            $sql = "SELECT * FROM productos";
            $statement = $conexion -> prepare($sql);
            $statement -> execute();
            
            while($response = $statement->fetch()) {
                $rows[] = $response;
            }

            return $rows;
        }

        public function eliminarProducto($arg_id_producto) {
            $modelo = new Conexion();
            $conexion = $modelo -> get_conexion();
            $sql = "DELETE FROM productos where Id_producto = :Id_producto";

            $statement = $conexion -> prepare($sql);
            $statement-> bindParam(':Id_producto', $arg_id_producto);
            // $statement->execute($sql);

            if(!$statement) {
                return "Error it can'delete item";
            }else  {
                $statement->execute();
                return "Item deleted correctly";
            }
        }

        public function buscarProductos($arg_nombre) { 
            $rows = null;
            $model = new Conexion();
            $conexion = $model -> get_conexion();
            $nombre = "%".$arg_nombre."%";
            $sql = "SELECT * FROM productos WHERE nombre LIKE :nombre";
            $statement = $conexion -> prepare($sql);
            $statement ->bindParam(":nombre", $nombre);
            $statement -> execute();
            
            while($response = $statement->fetch()) {
                $rows[] = $response;
            }

            return $rows;    
        }

        public function cargarProductos($arg_id_producto) { 

            $rows = null;
            $model = new Conexion();
            $conexion = $model -> get_conexion();
            $sql = "SELECT * FROM productos WHERE Id_producto = :Id_producto";
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(":Id_producto", $arg_id_producto);
            $statement -> execute();
            
            while($response = $statement->fetch()) {
                $rows[] = $response;
            }

            return $rows;
        }

        public function modificarProducto($arg_campo, $arg_valor, $arg_id_producto) { 
            $model = new Conexion();
            $conexion = $model -> get_conexion();
            $sql = "UPDATE productos SET $arg_campo = :valor WHERE Id_producto  = :Id_producto";
            $statement = $conexion -> prepare($sql);
            $statement ->bindParam(":valor",$arg_valor);
            $statement -> bindParam(":Id_producto",$arg_id_producto);

            if(!$statement) { 
                return "Error, It coluldn't update the product";
            }else { 
                $statement ->execute();
                return "Item updated succesfuly";
            }
        }
    }

?>