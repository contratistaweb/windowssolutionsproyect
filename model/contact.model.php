<?php

class Contact_Model
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


