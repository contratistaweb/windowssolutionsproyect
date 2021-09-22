<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Contac page  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/stylescontac.css">
    <title>Windows Solutions | Página de inicio</title>
</head>

<body>
    <?php include('./views/shared/header.php'); ?>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-middle mt-5">

            <?php
            if (isset($_GET["pag"])) {
                switch ($_GET["pag"]) {
                    case "":
                        include "views/pages/home.php";
                        break;
                    case "home":
                        include "views/pages/home.php";
                        break;
                    case "services":
                        include "views/pages/services.php";
                        break;
                    case "quote":
                        include "views/pages/quote.php";
                        break;
                    case "about":
                        include "views/pages/about.php";
                        break;
                    case "galery":
                        include "views/pages/galery.php";
                        break;
                    case "blog":
                        include "views/pages/blog.php";
                        break;
                    case "contact":
                        include "views/pages/contact.php";
                        break;
                    default:
                        include "views/pages/page_not_found.php";
                        break;
                }
            } else {
                include "views/pages/home.php";
            }
            ?>

        </div>
    </div>
    <?php include('./views/shared/footer.php'); ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <!-- Contact Page  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
</body>

</html>