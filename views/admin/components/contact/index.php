<h1>Admin contact</h1>

<h2 class="text-center mt-5">Listado de Usuarios y sus Respectivos Comentarios</h2>

<?php

// if (!isset($_SESSION["validarSesion"])) {
//     echo '<script>window.location = "index.php?pagina=ingreso"; </script>';
//     return;
// } else {
//     if ($_SESSION["validarSesion"] != "ok") {
//         echo '<script>window.location = "index.php?pagina=ingreso"; </script>';
//         return;
//     }
// }

$contact = ContactController::ctrSeleccionarRegistros();

?>
<div class="container">
    <div class="row">
        <?php foreach ($contact as $key => $value) { ?>

            <div class="accordion col-md-4" id="contact-<?php echo ($key + 1); ?>">
                <div class="accordion-item mt-1 mb-5">
                    <h2 class="accordion-header" id="headingOne">
                        <button id ="acor" class="accordion-button  <?php echo $value["leido"] == 0 ? "text-dark" : "text-warning" ?>" type="submit" data-bs-toggle="collapse" data-bs-target="#contactCollapse-<?php echo ($key + 1); ?>" aria-expanded="false" aria-controls="contactCollapse-<?php echo ($key + 1); ?>">
                            <?php echo $value["nombre_usuario"] . " - " .  $value["email_usuario"]; ?>
                        </button>
                    </h2>
                    <div id="contactCollapse-<?php echo ($key + 1); ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#contact-<?php echo ($key + 1); ?>">
                        <div class="accordion-body">
                            <?php echo $value["comentario_usuario"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br>
<br>
<hr>


<h2 class="text-center mt-5 mb-5">Listado de Usuarios Windows Solution</h2>

<?php





if (isset($_GET['action'])) {

    $update = ContactController::ctrUpdateRegistro(
        $_POST['id_usuario'],
        $_POST['nombre_usuario'],
        $_POST['direccion_usuario'],
        $_POST['celular_usuario'],
        $_POST['email_usuario']
    ); 
    echo '<script type="text/javascript">
    window.location = "http://localhost/windowssolutionsproyect/?admin=contact"
</script>';
  

}

if (isset($_GET['deleteItem'])) {
    $id = $_POST['id_usuario'];
    $userDelete = ContactController::ctrDeleteRegistro($_GET['deleteItem']);
    echo '<script type="text/javascript">
    window.location = "http://localhost/windowssolutionsproyect/?admin=contact"
</script>';
    
} else {

    if (!isset($_GET['update'])) {
        $usuarios = ContactController::ctrSeleccionarRegistros();
?>
       
        <table class="table table-striped">
            <thead class="thead-dark ">
                <tr>
                    <th class="col-4">#</th>
                    <th class="col-3">Nombre Usuario</th>
                    <th class="col-2">Direccion</th>
                    <th class="col-2">Contacto(Cel-Tel)</th>
                    <th class="col-1">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo ($key + 1); ?></th>
                        <td><?php echo $value["nombre_usuario"]; ?></td>
                        <td><?php echo $value["direccion_usuario"]; ?></td>
                        <td><?php echo $value["celular_usuario"]; ?></td>
                        <td><?php echo $value["email_usuario"]; ?></td>
    
                        <td>
                            <div class="d-flex justify-content-between">
                                <a name="update" id="update" class="btn btn-primary" role="button" href="http://localhost/windowssolutionsproyect/?admin=contact&update=<?= $value['id_usuario']; ?>"><i class="fa fa-pencil"></i></a>
                                <form action="http://localhost/windowssolutionsproyect/?admin=contact&deleteItem=<?= $value['id_usuario']; ?>" method="post">
                                    <input type="hidden" name="id_usuario" value="<?= $value['id_usuario']; ?>">
                                    <button type="submit" name="delete" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></button>
                                </form>

                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php

    } else {
            $usuarios = ContactController::ctrConsultarRegistro($_GET['update']);
            foreach ($usuarios as $key => $value) {
            ?>
                <form method="post" action="?admin=contact&action">

                    <legend>Actualizar Usuarios</legend>

                    <input type="hidden" name="id_usuario" value="<?= $value['id_usuario']; ?>">

                    <div class="form-group">
                        <label for="nombre_usuario">Nombre Usuario</label>
                        <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" aria-describedby="nombre_imgHelp" placeholder="Nombre de Usuario" value="<?= $value['nombre_usuario']; ?>">
                        <small id="nombre_imgHelp" class="form-text text-muted">Ingrese el nombre del Usuario</small>
                    </div>

                    <div class="form-group">
                        <label for="direccion_usuario">Direccion</label>
                        <input type="text" class="form-control" name="direccion_usuario" id="direccion_usuario" aria-describedby="b64_imgHelp" placeholder="Direccion" value="<?= $value['direccion_usuario']; ?>">
                        <small id="b64_imgHelp" class="form-text text-muted">Ingrese Direccion</small>
                    </div>

                    <div class="form-group">
                        <label for="celular_usuario">Celular</label>
                        <input type="text" class="form-control" name="celular_usuario" id="celular_usuario" aria-describedby="b64_imgHelp" placeholder="Celular" value="<?= $value['celular_usuario']; ?>">
                        <small id="b64_imgHelp" class="form-text text-muted">Ingrese Celular</small>
                    </div>

                    <div class="form-group">
                        <label for="email_usuario">E-mail</label>
                        <input type="text" class="form-control" name="email_usuario" id="email_usuario" aria-describedby="b64_imgHelp" placeholder="E-mail" value="<?= $value['email_usuario']; ?>">
                        <small id="b64_imgHelp" class="form-text text-muted">Ingrese E-mail</small>
                    </div>

                    <div class="d-flex row justify-content-between">
                        <button type="submit" class="btn btn-success col-md-2 m-1">Actualizar</button>
                        <a class="btn btn-outline-primary col-md-2 m-1" onclick="redirect('?admin=contact');">Atras</a>
                    </div>

                </form>

                <script type="text/javascript">
                    function redirect(route) {
                        window.location = route;
                    }
                </script>

        <?php

                }
            }
        }

        ?>