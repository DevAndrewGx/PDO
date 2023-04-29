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
    }

?>