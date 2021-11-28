<?php

class Contact_Model
{

    // dbconnection
    private $db;
    private  $table='usuarios';

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

    
    // Método para agregar una imgen
    public function addUser($id_rol ,$nombres,$email,$ubicacion,$contacto,$comentario,$leido){
        $sqlQuery = "INSERT INTO " . $this->table . " (id_role,nombre_usuario, direccion_usuario,celular_usuario,email_usuario,comentario_usuario,leido)
         values ('$id_rol','$nombres','$ubicacion','$contacto','$email','$comentario','$leido')";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    public function deleteRegistro( $id_usuario)
    {
        $sqlQuery = "DELETE FROM " . $this->table . " WHERE id_usuario = " . $id_usuario;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

    public function getRegistro($table, $id)
    {
        $sqlQuery = "SELECT * FROM " . $table . " WHERE id_usuario = " . $id . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    public function updateRegistro($id,$nombres,$ubicacion,$contacto,$email)
    {

        $sqlQuery = "UPDATE " . $this->table
            . " SET nombre_usuario = '" . $nombres . "', direccion_usuario = '" . $ubicacion . "',celular_usuario = '" . $contacto . "', email_usuario = '" . $email . "',celular_usuario = '" . $contacto . "' WHERE id_usuario = " . $id;
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }
}


