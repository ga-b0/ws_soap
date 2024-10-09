<?php 

    require_once("conn.php");

    class Departamento {
        public $last;
        public function obtenerDepartamentos(){
            $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4'. "root", "");
        }
    }



?>