<?php
class Database
{
    public $db;
    public function getConnection()
    {
        $this->db = null;
        try {
            
            //$this->db = new mysqli('windowssolutionsbd.mssql.somee.com', 'websolutions_SQLLogin_1', 'bpb58vxxk6', 'windowssolutionsbd');
        } catch (Exception $e) {
            echo "No hay conexión con la base de datos: " . $e->getMessage();
        }
        return $this->db;
    }
}