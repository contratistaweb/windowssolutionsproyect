<?php
$content = ContentController::ctrGetData();
?>

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
        <?php foreach ($content as $key => $value) { ?>
            <tr>
                <th scope="row"><?php echo ($key + 1); ?></th>
                <td><?php echo $value["id_cont"]; ?></td>
                <td><?php echo $value["id_img"]; ?></td>
                <td><?php echo $value["pagina_cont"]; ?></td>
                <td><?php echo $value["pagina_cont_titulo"]; ?></td>
                <td><?php echo $value["bloque_cont"]; ?></td>
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
    </div>
</div>
