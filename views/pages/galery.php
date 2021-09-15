<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="css/gallery-grid.css">

<div class="gallery-container">
    <h1>Nuestra Galería</h1>
    <p class="page-description text-center">Estamos orgullosos de nuestro trabajo</p>
    <div class="tz-gallery">
        <div class="row">
            <?php
            for ($i = 0; $i < 6; $i++) {
            ?>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="https://www.persianasbucaramanga.com/wp-content/uploads/2019/09/lobby-3623669_1024-700x466.jpg">
                        <img src="https://www.persianasbucaramanga.com/wp-content/uploads/2019/09/lobby-3623669_1024-700x466.jpg" alt="Persiana2">
                    </a>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>