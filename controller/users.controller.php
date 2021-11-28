<?php
include_once 'database/connect.php';
include_once "model/users.model.php";

class UsersController
{



    public function Index()
    {
        include_once 'views/admin/components/users/index.php';
    }

    static public function ctrGetAll()
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $usersModel = new Users_Model($db);

        $respuesta = $usersModel->getData($table);

        return $respuesta;
    }

    static public function ctrGetOneRegister($id_usuario)
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $usersModel = new Users_Model($db);

        $respuesta = $usersModel->getOneRegister($table, $id_usuario);

        return $respuesta;
    }


    static public function ctrUpdateItem($id_usuario, $nombre_usuario, $id_role, $direccion_usuario, $celular_usuario, $email_usuario, $comentario_usuario, $leido)
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $usersModel = new Users_Model($db);

        $respuesta = $usersModel->updateRegister($table, $id_usuario, $nombre_usuario, $id_role, $direccion_usuario, $celular_usuario, $email_usuario, $comentario_usuario, $leido);

        return $respuesta;
    }


    static public function ctrItemDelete($id_usuario)
    {
        $table = 'usuarios';
        $database = new Database();

        $db = $database->getConnection();
        $usersModel = new Users_Model($db);

        $respuesta = $usersModel->itemDelete($table, $id_usuario);
        echo '<br>$respuesta: ' . $respuesta;
        return $respuesta;
    }


    static public function ctrRequestRoles()
    {
        $database = new Database();

        $db = $database->getConnection();
        $usersModel = new Users_Model($db);

        $respuesta = $usersModel->getRoles();

        return $respuesta;
    }
}
