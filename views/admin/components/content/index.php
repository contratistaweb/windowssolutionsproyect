<?php

if (isset($_GET['action'])) {

    $update = ContentController::ctrUpdateItem(
        $_POST['id_cont'],
        $_POST['id_img'],
        $_POST['pagina_cont'],
        $_POST['pagina_cont_titulo'],
        $_POST['bloque_cont'],
    );
}
if (isset($_GET['add'])) {

    ContentController::ctrAddContents(
        $_POST['id_img'],
        $_POST['pagina_cont'],
        $_POST['pagina_cont_titulo'],
        $_POST['bloque_cont'],
    );
}

if (isset($_GET['deleteItem'])) {
    $id = $_POST['id_cont'];
    $contentsDelete = ContentController::ctrDeleteContents($id);
    if ($contentsDelete) {
        echo '<script type="text/javascript">
            function redirect(route) {
                window.location = route;
            }
            redirect("/?admin=content");
        </script>';
    }
    echo '<br>' . $id;
    echo '<br>' . $contentsDelete;
} else {

    if (!isset($_GET['update'])) {
        $contents = ContentController::ctrGetData();

?>

        <div>
            <br>
            <a name="addContents" id="addContents" class="btn btn-danger" role="button" href="/?admin=content&update&addContents">Agregar</a>
            <br>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead class="thead-dark ">
                        <tr>
                            <th scope="row">#</th>
                            <th>ID</th>
                            <th>imagen</th>
                            <th>pagina</th>
                            <th>titulo</th>
                            <th>contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contents as $key => $value) { ?>
                            <tr>
                                <th scope="row"><?php echo ($key + 1); ?></th>
                                <td><?php echo $value["id_cont"]; ?></td>
                                <td><?php echo $value["id_img"]; ?></td>
                                <td><?php echo $value["pagina_cont"]; ?></td>
                                <td><?php echo $value["pagina_cont_titulo"]; ?></td>
                                <td><?php echo $value["bloque_cont"]; ?></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <a name="update" id="update" class="btn btn-primary" role="button" href="/?admin=content&update= <?= $value['id_cont']; ?>"><i class="fa fa-pencil"></i></a>
                                        <form action="/?admin=content&deleteItem=<?= $value['id_cont']; ?>" method="post">
                                            <input type="hidden" name="id_cont" value="<?= $value['id_cont']; ?>">
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
                if (isset($_GET['addContents'])) {

                ?>

                    <form method="post" action="/?admin=content&add">

                        <legend>Agregar Contenidos</legend>

                        <input type="hidden" name="id_cont" value="">

                        <div class="form-group">
                            <label for="id_img">imagen</label>
                            <input type="text" class="form-control" name="id_img" id="id_img" aria-describedby="id_imgHelp" placeholder="imagen" value="">
                            <small id="id_imgHelp" class="form-text text-muted"> Imagen</small>
                        </div>

                        <div class="form-group">
                            <label for="pagina_cont">Pagina</label>
                            <input type="text" class="form-control" name="pagina_cont" id="pagina_cont" aria-describedby="pagina_contHelp" placeholder="pagina" value="">
                            <small id="pagina_contHelp" class="form-text text-muted">Ingrese el nombre de la pagina</small>
                        </div>

                        <div class="form-group">
                            <label for="pagina_cont_titulo">Titulo del contenido</label>
                            <input type="text" class="form-control" name="pagina_cont_titulo" id="pagina_cont_titulo" aria-describedby="pagina_cont_titulo" placeholder="titulo contenido" value="">
                            <small id="pagina_cont_tituloHelp" class="form-text text-muted">Ingrese el titulo del contenido</small>
                        </div>
                        <div class="form-group">
                            <label for="bloque_cont">contenido</label>
                            <input type="text" class="form-control" name="bloque_cont" id="bloque_cont" aria-describedby="bloque_cont" placeholder="contenido" value="">
                            <small id="bloque_contHelp" class="form-text text-muted">Ingrese el contenido</small>
                        </div>

                        <div class="d-flex row justify-content-between">
                            <button type="submit" class="btn btn-success col-md-2 m-1">Enviar</button>
                            <a class="btn btn-outline-primary col-md-2 m-1" onclick="redirect('/?admin=content');">Atras</a>
                        </div>

                    </form>

                    <script type="text/javascript">
                        function redirect(route) {
                            window.location = route;
                        }
                    </script>

                    <?php


                } else {
                    $content = ContentController::ctrGetOneContents($_GET['update']);
                    foreach ($content as $key => $value) {
                    ?>
                        <form method="post" action="/?admin=content&action">

                            <legend>Actualizar contenido</legend>

                            <input type="hidden" name="id_cont" value="<?= $value['id_cont']; ?>">

                            <div class="form-group">
                                <label for="id_img">Imagen</label>
                                <input type="number" class="form-control" name="id_img" id="id_img" aria-describedby="id_imgHelp" placeholder="imagen" value="<?= $value['id_img']; ?>">
                                <small id="id_imgHelp" class="form-text text-muted">Imagen</small>
                            </div>

                            <div class="form-group">
                                <label for="pagina_cont">Pagina</label>
                                <input type="text" class="form-control" name="pagina_cont" id="pagina_cont" aria-describedby="pagina_contHelp" placeholder="pagina" value="<?= $value['pagina_cont']; ?>">
                                <small id="pagina_contHelp" class="form-text text-muted">Ingrese el nombre de la pagina</small>
                            </div>

                            <div class="form-group">
                                <label for="pagina_cont_titulo">Titulo del contenido</label>
                                <input type="text" class="form-control" name="pagina_cont_titulo" id="pagina_cont_titulo" aria-describedby="pagina_cont_tituloHelp" placeholder="contenido" value="<?= $value['pagina_cont_titulo']; ?>">
                                <small id="pagina_cont_tituloHelp" class="form-text text-muted">Ingrese el titulo</small>
                            </div>

                            <div class="form-group">
                                <label for="bloque_cont">Contenido</label>
                                <input type="text" class="form-control" name="bloque_cont" id="bloque_cont" aria-describedby="bloque_cont" placeholder="contenido" value="<?= $value['bloque_cont']; ?>">
                                <small id="bloque_contHelp" class="form-text text-muted">Ingrese el contenido</small>
                            </div>

                            <div class="d-flex row justify-content-between">
                                <button type="submit" class="btn btn-success col-md-2 m-1">Actualizar</button>
                                <a class="btn btn-outline-primary col-md-2 m-1" onclick="redirect('/?admin=content');">Atras</a>
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