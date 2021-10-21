<?php
include_once 'database/connect.php';
include_once "model/users.model.php";

class UsersController
{
    public function Index()
    {
        include_once 'views/admin/components/users/index.php';
    }

    static public function ctrSeleccionarRegistros()
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $usersModel = new Users_Model($db);

        $respuesta = $usersModel->getData($table);

        return $respuesta;
    }

    static public function ctrEliminarRegistro()
    {
        # code...
    }
}
