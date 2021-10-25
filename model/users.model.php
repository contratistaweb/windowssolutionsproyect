<?php

class Users_Model
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


    public function getOneRegister($table, $id)
    {
        $sqlQuery = "SELECT * FROM " . $table . " WHERE id_usuario = " . $id . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }


    public function updateRegister($table, $id_usuario, $nombre_usuario, $id_role, $direccion_usuario, $celular_usuario, $email_usuario, $comentario_usuario, $leido)
    {

        $sqlQuery = "UPDATE " . $table
            . " SET nombre_usuario = '" . $nombre_usuario
            . "', id_role = " . (int)$id_role
            . ", direccion_usuario = '" . $direccion_usuario
            . "', celular_usuario = '" . $celular_usuario
            . "', email_usuario = '" . $email_usuario
            . "', comentario_usuario = '" . $comentario_usuario
            . "', leido = " . (int)$leido
            . " WHERE id_usuario = " . $id_usuario . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }


    public function itemDelete($table, $id_usuario)
    {
        $sqlQuery = "DELETE FROM " . $table . " WHERE id_usuario = " . $id_usuario;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }


    public function getRoles()
    {
        $sqlQuery = "SELECT * FROM roles";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }
}
