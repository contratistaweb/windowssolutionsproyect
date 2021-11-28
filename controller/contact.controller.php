<?php
include_once 'database/connect.php';
include_once "model/contact.model.php";

class ContactController
{
    public function Index()
    {
        include_once 'views/admin/components/contact/index.php';
    }

    static public function ctrSeleccionarRegistros()
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $contactModel = new Contact_Model($db);

        $respuesta = $contactModel->getData($table);

        return $respuesta;
    }

    static public function add($id_rol ,$nombres,$email,$ubicacion,$contacto,$comentario,$leido){

        $database = new Database();
        $db = $database->getConnection();

        $userModel = new Contact_Model($db);

        $respuesta = $userModel->addUser($id_rol ,$nombres,$email,$ubicacion,$contacto,$comentario,$leido);

        return $respuesta;
    }

    static public function ctrDeleteRegistro($id_usuario)
    {
        $database = new Database();

        $db = $database->getConnection();
        $userModel = new Contact_Model($db);

        $respuesta = $userModel->deleteRegistro($id_usuario);
       
    }

    static public function ctrConsultarRegistro($id_usuario)
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $imagesModel = new Contact_Model($db);

        $respuesta = $imagesModel->getRegistro($table, $id_usuario);

        return $respuesta;
    }

    static public function ctrUpdateRegistro($id_usuario,$nombres,$ubicacion,$contacto,$email)
    {
        $database = new Database();

        $db = $database->getConnection();
        $userModel = new Contact_Model($db);

        $respuesta = $userModel->updateRegistro($id_usuario,$nombres,$ubicacion,$contacto,$email);

        return $respuesta;
    }
}
