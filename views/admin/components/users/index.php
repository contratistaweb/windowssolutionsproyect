<h1>Admin users</h1>
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

if (isset($_GET['action'])) {

    // $id_usuario, $nombre_usuario, $id_role, $direccion_usuario, $celular_usuario, $email_usuario, $comentario_usuario, $leido
    $update = UsersController::ctrUpdateItem(
        $_POST['id_usuario'],
        $_POST['nombre_usuario'],
        $_POST['id_role'],
        $_POST['direccion_usuario'],
        $_POST['celular_usuario'],
        $_POST['email_usuario'],
        $_POST['comentario_usuario'],
        $_POST['leido']
    );
}

if (isset($_GET['deleteItem'])) {
    $id = $_POST['id_usuario'];
    $userDelete = UsersController::ctrItemDelete($id);
    if ($userDelete) {
        echo '<script type="text/javascript">
            function redirect(route) {
                window.location = route;
            }
            redirect("/?admin=users");
        </script>';
    }
    echo '<br>' . $id;
    echo '<br>' . $userDelete;
} else {

    if (!isset($_GET['update'])) {
        $usuarios = UsersController::ctrGetAll();
?>
        <table class="table table-striped">
            <thead class="thead-dark ">
                <tr>
                    <th scope="row">#</th>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Direccion</th>
                    <th>Role</th>
                    <th>Comentarios</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo ($key + 1); ?></th>
                        <td><?php echo $value["id_usuario"]; ?></td>
                        <td><?php echo $value["nombre_usuario"]; ?></td>
                        <td><?php echo $value["email_usuario"]; ?></td>
                        <td><?php echo $value["celular_usuario"]; ?></td>
                        <td><?php echo $value["direccion_usuario"]; ?></td>
                        <td><?php echo $value["id_role"] == 1 ? 'Administrador' : ($value["id_role"] == 2 ? 'vendedor' : 'usuario'); ?></td>
                        <td><?php echo $value["comentario_usuario"]; ?></td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a name="update" id="update" class="btn btn-primary" role="button" href="/?admin=users&update=<?= $value['id_usuario']; ?>"><i class="fa fa-pencil"></i></a>
                                <form action="/?admin=users&deleteItem=<?= $value['id_usuario']; ?>" method="post">
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
        $usuario = UsersController::ctrGetOneRegister($_GET['update']);

        foreach ($usuario as $key => $value) {
        ?>

            <form method="post" action="/?admin=users&update=<?= $value['id_usuario']; ?>&action=update">

                <legend>Update user</legend>

                <input type="hidden" name="id_usuario" value="<?= $value['id_usuario']; ?>">
                <input type="hidden" name="comentario_usuario" value="<?= $value['comentario_usuario']; ?>">
                <input type="hidden" name="leido" value="<?= $value['leido']; ?>">

                <div class="form-group">
                    <label for="email_usuario">Email</label>
                    <input type="email" class="form-control" name="email_usuario" id="email_usuario" aria-describedby="email_usuarioHelp" placeholder="User Email" value="<?= $value['email_usuario']; ?>">
                    <small id="email_usuarioHelp" class="form-text text-muted">Ingrese su email</small>
                </div>

                <div class="form-group">
                    <label for="id_role">Role</label>
                    <select class="form-control" name="id_role" id="id_role">
                        <?php $roles = UsersController::ctrRequestRoles();
                        foreach ($roles as $key_role => $value_role) {
                            if ($value_role['id_role'] == $value['id_role']) {
                                echo '<option selected value="' . $value_role['id_role'] . '">' . $value_role['nombre_role'] . '</option>';
                            } else {
                                echo '<option value="' . $value_role['id_role'] . '">' . $value_role['nombre_role'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nombre_usuario">Nombre</label>
                    <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" aria-describedby="nombre_usuarioHelp" placeholder="User nombre" value="<?= $value['nombre_usuario']; ?>">
                    <small id="nombre_usuarioHelp" class="form-text text-muted">Ingrese su nombre</small>
                </div>

                <div class="form-group">
                    <label for="celular_usuario">Celular</label>
                    <input type="text" class="form-control" name="celular_usuario" id="celular_usuario" aria-describedby="celular_usuarioHelp" placeholder="User celular" value="<?= $value['celular_usuario']; ?>">
                    <small id="celular_usuarioHelp" class="form-text text-muted">Ingrese su celular</small>
                </div>

                <div class="form-group">
                    <label for="direccion_usuario">Direccion</label>
                    <input type="text" class="form-control" name="direccion_usuario" id="direccion_usuario" aria-describedby="direccion_usuarioHelp" placeholder="User direccion" value="<?= $value['direccion_usuario']; ?>">
                    <small id="direccion_usuarioHelp" class="form-text text-muted">Ingrese su direccion</small>
                </div>
                <div class="d-flex row justify-content-between">
                    <button type="submit" class="btn btn-success col-md-2 m-1">Actualizar</button>
                    <a class="btn btn-outline-primary col-md-2 m-1" onclick="redirect('/?admin=users');">Atras</a>
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