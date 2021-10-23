<?php

class Database
{
    public $db;
    public function getConnection()
    {
        $this->db = null;
        try {
            // $this->db = new mysqli('localhost', 'windowss_wsdb', 'WindowsSolutions17', 'windowss_wsdb');
            $this->db = new mysqli('localhost', 'root', '', 'windowss_wsdb');
        } catch (Exception $e) {
            echo "No hay conexión con la base de datos: " . $e->getMessage();
        }
        return $this->db;
    }
}

// class Conexion
// {

//     static public function conectar()
//     {
//         $link = new PDO("mysql:host=localhost;dbname=windowss_wsdb", "windowss_wsdb", "WindowsSolutions17");
//         $link->exec("set names utf8");
//         return $link;
//     }
// }
