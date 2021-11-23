<?php

class Database
{
    public $db;
    public function getConnection()
    {
        $this->db = null;
        try {
           $this->db = new mysqli('localhost', 'windowss_wsdb', 'WindowsSolutions17', 'windowss_wsdb');
        } catch (Exception $e) {
            echo "No hay conexión con la base de datos: " . $e->getMessage();
        }
        return $this->db;
    }

    function conectar (){
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=windowss_wsdb', "root", "");
           
            return $dbh ;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    
}

