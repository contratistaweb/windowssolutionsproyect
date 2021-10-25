<?php
include_once 'database/connect.php';
include_once "model/images.model.php";

class ImagesController
{
    public function Index()
    {
        include_once 'views/admin/components/images/index.php';
    }

    static public function ctrSeleccionarRegistros()
    {
        $table = 'imagenes';
        $database = new Database();

        $db = $database->getConnection();
        $imagesModel = new Images_Model($db);

        $respuesta = $imagesModel->getData($table);

        return $respuesta;
    }

    static public function ctrEliminarRegistro()
    {
        # code...
    }
}
