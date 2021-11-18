<h1>Admin images</h1>

<?php

if (isset($_GET['action'])) {

    $update = ImagesController::ctrUpdateRegistro(
        $_POST['id_img'],
        $_POST['nombre_img'],
        $_POST['b64_img'],
    );
}

if (isset($_GET['add'])) {

    ImagesController::ctrAddImagen(
        $_POST['nombre_img'],
        $_POST['b64_img'],
    );
}



if (isset($_GET['deleteItem'])) {
    $id = $_POST['id_img'];
    $imagesDelete = ImagesController::ctrDeleteRegistro($id);
    if ($imagesDelete) {
        echo '<script type="text/javascript">
            function redirect(route) {
                window.location = route;
            }
            redirect("/?admin=images");
        </script>';
    }
    echo '<br>' . $id;
    echo '<br>' . $imagesDelete;
} else {

    if (!isset($_GET['update'])) {
        $imagenes = ImagesController::ctrSeleccionarRegistros();
?>
        <div>
            <br>
            <a name="addimages" id="addimages" class="btn btn-primary" role="button" href="/?admin=images&update&addimages">Agregar</a>
            <br>
            <br>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark ">
                <tr>
                    <th class="col-4">#</th>
                    <th class="col-3">ID</th>
                    <th class="col-2">Nombre</th>
                    <th class="col-2">URL de imagen</th>
                    <th class="col-1">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($imagenes as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo ($key + 1); ?></th>
                        <td><?php echo $value["id_img"]; ?></td>
                        <td><?php echo $value["nombre_img"]; ?></td>
                        <td>
                            <a class="lightbox" href="<?php echo $value["b64_img"]; ?>">
                                <img class="img-thumbnail" src="<?php echo $value["b64_img"]; ?>" alt="Persiana2">
                            </a>
                        </td>
                        <td>
                            <div class="d-flex justify-content-between">
                                <a name="update" id="update" class="btn btn-primary" role="button" href="/?admin=images&update=<?= $value['id_img']; ?>"><i class="fa fa-pencil"></i></a>
                                <form action="/?admin=images&deleteItem=<?= $value['id_img']; ?>" method="post">
                                    <input type="hidden" name="id_img" value="<?= $value['id_img']; ?>">
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
        if (isset($_GET['addimages'])) {
            // $imagen = ImagesController::ctrAddImagen();
            
        ?>

            <form method="post" action="/?admin=images&add">

                <legend>Agregar images</legend>

                <input type="hidden" name="id_img" value="">

                <div class="form-group">
                    <label for="nombre_img">Nombre de la imagen</label>
                    <input type="text" class="form-control" name="nombre_img" id="nombre_img" aria-describedby="nombre_imgHelp" placeholder="Nombre de imagen" value="">
                    <small id="nombre_imgHelp" class="form-text text-muted">Ingrese el nombre de la imagen</small>
                </div>

                <div class="form-group">
                    <label for="b64_img">URL de imagen</label>
                    <input type="text" class="form-control" name="b64_img" id="b64_img" aria-describedby="b64_imgHelp" placeholder="URL de imagen" value="">
                    <small id="b64_imgHelp" class="form-text text-muted">Ingrese la URL de la imagen</small>
                </div>

                <div class="d-flex row justify-content-between">
                    <button type="submit" class="btn btn-success col-md-2 m-1">Enviar</button>
                    <a class="btn btn-outline-primary col-md-2 m-1" onclick="redirect('/?admin=images');">Atras</a>
                </div>

            </form>

            <script type="text/javascript">
                function redirect(route) {
                    window.location = route;
                }
            </script>

            <?php

        } else {
            $imagen = ImagesController::ctrConsultarRegistro($_GET['update']);
            foreach ($imagen as $key => $value) {
            ?>
                <form method="post" action="/?admin=images&action">

                    <legend>Update images</legend>

                    <input type="hidden" name="id_img" value="<?= $value['id_img']; ?>">

                    <div class="form-group">
                        <label for="nombre_img">Nombre de la imagen</label>
                        <input type="text" class="form-control" name="nombre_img" id="nombre_img" aria-describedby="nombre_imgHelp" placeholder="Nombre de imagen" value="<?= $value['nombre_img']; ?>">
                        <small id="nombre_imgHelp" class="form-text text-muted">Ingrese el nombre de la imagen</small>
                    </div>

                    <div class="form-group">
                        <label for="b64_img">URL de imagen</label>
                        <input type="text" class="form-control" name="b64_img" id="b64_img" aria-describedby="b64_imgHelp" placeholder="URL de imagen" value="<?= $value['b64_img']; ?>">
                        <small id="b64_imgHelp" class="form-text text-muted">Ingrese la URL de la imagen</small>
                    </div>

                    <div class="d-flex row justify-content-between">
                        <button type="submit" class="btn btn-success col-md-2 m-1">Actualizar</button>
                        <a class="btn btn-outline-primary col-md-2 m-1" onclick="redirect('/?admin=images');">Atras</a>
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
}

?>