<?php

class Content_Model
{
    // dbconnection
    private $db;

    // Db 
    public function __construct($db)
    {
        $this->db = $db;
    }

    //Agregar Contenido
    public function addContents($table, $id_img, $pagina_cont, $pagina_cont_titulo, $bloque_cont){
        $sqlQuery = "INSERT INTO " . $table . " ( id_img, pagina_cont, pagina_cont_titulo, bloque_cont) values ('$id_img', '$pagina_cont', '$pagina_cont_titulo', '$bloque_cont')";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    //Consultar la tabla de  Contenido
    public function getContents($table)
    {
        $sqlQuery = "SELECT * FROM " . $table . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }
    
    public function getOneContents($table, $id)
    {
        $sqlQuery = "SELECT * FROM " . $table . " WHERE id_cont = " . $id . "";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

    public function updateContents($table, $id_cont, $id_img, $pagina_cont, $pagina_cont_titulo, $bloque_cont)
    {

        $sqlQuery = "UPDATE " . $table
            . " SET id_img = '" . $id_img . "', pagina_cont = '" . $pagina_cont . "', pagina_cont_titulo = '" . $pagina_cont_titulo . "',bloque_cont = '".$bloque_cont. "' WHERE id_cont = " . $id_cont;
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }
    
    public function deleteContents($table, $id_cont)
    {
        $sqlQuery = "DELETE FROM " . $table . " WHERE id_cont = " . $id_cont;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }
}
