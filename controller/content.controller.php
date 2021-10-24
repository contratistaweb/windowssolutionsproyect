<?php
include_once 'database/connect.php';
include_once "model/content.model.php";

class ContentController
{

    public function Index()
    {
        include_once 'views/admin/components/content/index.php';
    }

    static public function ctrGetData()
    {
        $table = 'contenidos';
        $database = new Database();

        $db = $database->getConnection();
        $contentsModel = new Content_Model($db);

        $respuesta = $contentsModel->getContents($table);

        return $respuesta;
    }
}
