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

    static public function ctrEliminarRegistro()
    {
        # code...
    }
}
