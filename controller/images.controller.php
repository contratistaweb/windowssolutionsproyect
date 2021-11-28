<?php
include_once 'database/connect.php';
include_once "model/images.model.php";

class ImagesController
{
    public function Index()
    {
        include_once 'views/admin/components/images/index.php';
    }

    static public function ctrAddImagen($nombre_img, $b64_img)
    {
        $table = 'imagenes';
        $database = new Database();
        $db = $database->getConnection();

        $imagesModel = new Images_Model($db);

        $respuesta = $imagesModel->addImagen($table, $nombre_img, $b64_img);

        return $respuesta;
    }

    static public function ctrSeleccionarRegistros()
    {
        $table = 'imagenes';
        $database = new Database();

        $db = $database->getConnection();
        $imagesModel = new Images_Model($db);

        $respuesta = $imagesModel->getTabla($table);

        return $respuesta;
    }

    static public function ctrConsultarRegistro($id_img)
    {
        $table = 'imagenes';
        $database = new Database();

        $db = $database->getConnection();
        $imagesModel = new Images_Model($db);

        $respuesta = $imagesModel->getRegistro($table, $id_img);

        return $respuesta;
    }

    static public function ctrUpdateRegistro($id_img, $nombre_img, $b64_img)
    {
        $table = 'imagenes';
        $database = new Database();

        $db = $database->getConnection();
        $imagesModel = new Images_Model($db);

        $respuesta = $imagesModel->updateRegistro($table, $id_img, $nombre_img, $b64_img);

        return $respuesta;
    }

    static public function ctrDeleteRegistro($id_img)
    {
        $table = 'imagenes';
        $database = new Database();

        $db = $database->getConnection();
        $imagesModel = new Images_Model($db);

        $respuesta = $imagesModel->deleteRegistro($table, $id_img);
        echo '<br>$respuesta: ' . $respuesta;
        return $respuesta;
    }
}
