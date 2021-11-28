<?php
include_once 'database/connect.php';
include_once "model/content.model.php";

class ContentController
{
    

    public function Index()
    {
        include_once 'views/admin/components/content/index.php';
    }

    static public function ctrAddContents($id_img, $pagina_cont, $pagina_cont_titulo, $bloque_cont)
    {
        $table = 'contenidos';
        $database = new Database();
        $db = $database->getConnection();

        $ContentsModel = new Content_Model($db);

        $respuesta = $ContentsModel->addContents($table, $id_img, $pagina_cont, $pagina_cont_titulo, $bloque_cont);

        return $respuesta;
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

    static public function ctrGetOneContents($id_cont)
    {
        $table = 'contenidos';
        $database = new Database();

        $db = $database->getConnection();
        $contentsModel = new Content_Model($db);

        $respuesta = $contentsModel->getOneContents($table, $id_cont);

        return $respuesta;
    }


    static public function ctrUpdateItem($id_cont, $id_img, $pagina_cont, $pagina_cont_titulo, $bloque_cont)
    {
        $table = 'contenidos';
        $database = new Database();

        $db = $database->getConnection();
        $contentsModel = new Content_Model($db);

        $respuesta = $contentsModel->updateContents($table,  $id_cont, $id_img, $pagina_cont, $pagina_cont_titulo, $bloque_cont);

        return $respuesta;
    }

    static public function ctrDeleteContents($id_cont)
    {
        $table = 'contenidos';
        $database = new Database();

        $db = $database->getConnection();
        $contentsModel = new Content_Model($db);

        $respuesta = $contentsModel->deleteContents($table, $id_cont);
        echo '<br>$respuesta: ' . $respuesta;
        return $respuesta;
    }
}
