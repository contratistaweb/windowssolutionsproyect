<?php
include_once 'database/connect.php';
include_once "model/contact.model.php";


if(isset($_POST['enviar'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];

    

        $id_rol = 3;
        $leido=0;
        $nombres= $nombre."-".$apellido;
        $ubicacion=$ciudad."-".$direccion;
        $contacto = $telefono."-".$celular;

        $database = new Database();
        $db = $database->getConnection();

        $userModel = new Contact_Model($db);

        $respuesta = $userModel->addUser($id_rol ,$nombres,$email,$ubicacion,$contacto,$comentario,$leido);
        

};
?>



    <div id="imagen">
        <img src="./assets/images/contactenos.png" alt="contáctenos" id="imag">
    </div>

    <p id="mensaje">Estimado cliente... En el siguiente formulario deposite los datos correspondientes
        para tener el gusto de atenderlo
    </p>

        
    <section>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6 elemento">
                    <label for="inputPassword5" class="form-label label">Nombres</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
                <div class="col-md-6 elemento">
                    <label for="inputPassword5" class="form-label label">Apellidos</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">
                </div>
            </div>
            <div class="inputmail mt-2">
                <label id="labelcorreo" for="inputPassword5" class="form-label label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="row">
                <div class="col-md-6 elemento mt-2">
                    <label for="inputPassword5" class="form-label label">Ciudad</label>
                    <input type="text" id="ciudad" name="ciudad" class="form-control" required>
                </div>
                <div class="col-md-6 elemento mt-2">
                    <label for="inputPassword5" class="form-label label">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 elemento mt-2">
                    <label for="inputPassword5" class="form-label label">Celular</label>
                    <input type="text" id="celular" name="celular" class="form-control" required>
                </div>
                <div class="col-md-6 elemento mt-2">
                    <label for="inputPassword5" class="form-label label">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" class="form-control">
                </div>
            </div>
            <div class="form-floating mt-2">
                <label id="textarea" class="label" for="floatingTextarea2">Comentarios</label>
                <textarea class="form-control text" name="comentario" placeholder="Deja un comentario aqui" id="floatingTextarea2" style="height: 100px" required></textarea>
            </div>
            <div id="inputenviar">
                <input type="submit" name="enviar" id="enviar" class="enviar">
            </div>
        </form>
    </section>


