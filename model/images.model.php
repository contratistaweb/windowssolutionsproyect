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

    // Método para agregar una imgen
    public function addImagen($table, $nombre_img, $b64_img){
        $sqlQuery = "INSERT INTO " . $table . " (nombre_img, b64_img) values ('$nombre_img', '$b64_img')";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    // Método para consultar la tabla images
    public function getTabla($table)
    {
        $sqlQuery = "SELECT * FROM " . $table . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    // Método para consultar un registro de la tabla images
    public function getRegistro($table, $id)
    {
        $sqlQuery = "SELECT * FROM " . $table . " WHERE id_img = " . $id . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    // Método para actualizar images
    public function updateRegistro($table, $id_img, $nombre_img, $b64_img)
    {

        $sqlQuery = "UPDATE " . $table
            . " SET nombre_img = '" . $nombre_img . "', b64_img = '" . $b64_img . "' WHERE id_img = " . $id_img;
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    // Método para eliminar images
    public function deleteRegistro($table, $id_img)
    {
        $sqlQuery = "DELETE FROM " . $table . " WHERE id_img = " . $id_img;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }
}
