<h1>Images</h1>
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

$imagenes = ImagesController::ctrSeleccionarRegistros();

?>
<table class="table table-striped">
    <thead class="thead-dark ">
        <tr>
            <th class="col-4">#</th>
            <th class="col-3">ID</th>
            <th class="col-2">Nombre</th>
            <th class="col-2">Imagen en base 64</th>
            <th class="col-1">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($imagenes as $key => $value) { ?>
            <tr>
                <th scope="row"><?php echo ($key + 1); ?></th>
                <td><?php echo $value["id_img"]; ?></td>
                <td><?php echo $value["nombre_img"]; ?></td>
                <td><?php echo $value["b64_img"]; ?></td>
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