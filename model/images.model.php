<?php

class Images_Model
{
    // dbconnection
    private $db;

    // Db 
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getData($table)
    {
        $sqlQuery = "SELECT * FROM " . $table . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }
}

// SELECT * FROM roles as rol
// INNER JOIN usuarios as us 
// INNER JOIN permisos_roles as p_r
// INNER JOIN permisos as per
// GROUP BY per.permiso
