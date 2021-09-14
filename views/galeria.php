<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('./shared/header.php');
    ?>
        <p class="alert-success" >Hola esta es la galería</p>
    <?php
        include('./shared/footer.php');
    ?>
    
</body>
</html>
=======
<?php

for ( $i = 0; $i < 12; $i++) {
?>
    <div class="card">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title">esta imagen</h4>
            <p class="card-text">Es la No. <?php echo $i; ?></p>
        </div>
    </div>
<?php
    
} ?>
>>>>>>> 248cfe23adecf5b794a5f379161c249adcb71991
