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

$usuarios = UsersController::ctrSeleccionarRegistros();

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
                        <a name="update" id="update" class="btn btn-primary" role="button"><i class="fa fa-pencil"></i></a>
                        <a name="delete" id="delete" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>