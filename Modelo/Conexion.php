<?php
    class Conexion { 
        // We return the conexion
        public function get_conexion() { 
            //User root
            $user = "root";
            $password = "1234";
            $host = "localhost";
            $db = "db_sistema";
            // We create a new instance for PDO is the conexion.
            $conexion = new PDO("mysql:host=$host;dbname=$db;",$user, $password);
            return $conexion;
        }
    }
?>