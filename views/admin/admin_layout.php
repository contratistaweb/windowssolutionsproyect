<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/adminStyles.css">
    <title>Windows Solutions | Administacion del sitio</title>
</head>

<body>

    <div class="container-fluid">
        <div class="sidenav fixed-top" id="admin-header">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Windows Solutions</a>
            </div>
        </div>
        <div class="row">
            <div id="admin-sidebar" class="col-md-2 p-x-0 p-y-3">
                <ul class="sidenav admin-sidenav list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">contents</a></li>
                    <li><a href="#">images</a></li>
                    <li><a href="#">products</a></li>
                    <li><a href="#">users</a></li>
                    <li><a href="#">salir</a></li>
                </ul>
            </div> <!-- /#admin-sidebar -->
            <div id="admin-main-control" class="col-md-10">
                <div class="content-title mx-auto mb-3">
                    <i class="fa fa-dashboard"></i> Dashboard
                </div>

                <!-- DASHBOARD CONTENT -->
                <?php
                include_once "controller/home.controller.php";
                include_once "controller/users.controller.php";
                include_once "controller/contact.controller.php";
                include_once "controller/content.controller.php";
                include_once "controller/images.controller.php";
                include_once "controller/products.controller.php";

                $home = new HomeController();
                $users = new UsersController();
                $contact = new ContactController();
                $content = new ContentController();
                $images = new ImagesController();
                $products = new ProductsController();

                if (isset($_GET["admin"])) {
                    switch ($_GET["admin"]) {
                        case "home":
                            $home->Index();
                            break;
                        case "content":
                            $content->Index();
                            break;
                        case "images":
                            $images->Index();
                            break;
                        case "products":
                            $products->Index();
                            break;
                        case "users":
                            $users->Index();
                            break;
                        case "contact":
                            $contact->Index();
                            break;
                        default:
                            $home->Index();
                            break;
                    }
                }
                ?>
                <!-- DASHBOARD CONTENT -->
            </div> <!-- /#admin-main-control -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->






    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/67c6ce199d.js" crossorigin="anonymous"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>