<h1>Admin contact</h1>
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
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button <?php echo $value["leido"] == 0 ? "bg-dark text-light" : "" ?>" type="button" data-bs-toggle="collapse" data-bs-target="#contactCollapse-<?php echo ($key + 1); ?>" aria-expanded="false" aria-controls="contactCollapse-<?php echo ($key + 1); ?>">
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