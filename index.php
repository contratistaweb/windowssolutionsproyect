<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/stylescontac.css">
    <link rel="stylesheet" href="assets/css/awl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gallery-grid.css">
    <link rel="stylesheet" href="assets/css/styleabout.css">
    
</head>

<body>
    <?php
    include_once "./controller/pages.controller.php";
    include_once "./controller/admin.controller.php";

    $pages = new PagesControlller();
    $admin = new AdminControlller();

    if (isset($_GET['pag'])) {
        $pages->Index('./views/');
    } else {
        if (!isset($_GET['admin'])) {
            $pages->Index('./views/');
        } else {
            $admin->Index('./views/');
        }
    }
    ?>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="https://kit.fontawesome.com/67c6ce199d.js" crossorigin="anonymous"></script>
    <!-- Contact Page  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
</body>

</html>