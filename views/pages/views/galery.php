<?php
    $imagenes = ImagesController::ctrSeleccionarRegistros();
?>

<div class="gallery-container">
    <h1>Nuestra Galería</h1>
    <p class="page-description text-center">Estamos orgullosos de nuestro trabajo</p>
    <div class="tz-gallery">
        <div class="row">
            <?php
            foreach ($imagenes as $key => $value) {
            ?>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="<?php echo $value["b64_img"]; ?>">
                        <img src="<?php echo $value["b64_img"]; ?>" alt="Persiana2">
                    </a>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>