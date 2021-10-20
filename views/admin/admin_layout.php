<div class="container-fluid">
    <div class="sidenav fixed-top" id="admin-header">
        <div class="container-fluid">
            <a class="text-primary text-decoration-none display-5" href="/?admin=home">Windows Solutions</a>
        </div>
    </div>
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
    $url = 'https://windowssolutionsproject.tk';
    ?>
    <div class="row">
        <div id="admin-sidebar" class="col-md-1 p-x-0 p-y-3">
            <ul class="sidenav admin-sidenav list-unstyled">
                <li><a href="/?admin=home">Home</a></li>
                <li><a href="/?admin=content">contents</a></li>
                <li><a href="/?admin=images">images</a></li>
                <li><a href="/?admin=products">products</a></li>
                <li><a href="/?admin=users">users</a></li>
                <li><a href="/?admin=contact">contact</a></li>
                <li><a href="#">salir</a></li>
            </ul>
        </div> <!-- /#admin-sidebar -->
        <div id="admin-main-control" class="col-md-11">
            <div class="container">
                <div class="row">
                    <div class="content-title mx-auto mb-3">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </div>

                    <!-- DASHBOARD CONTENT -->
                    <?php

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
            </div>
        </div>

    </div> <!-- /.row -->
</div> <!-- /.container-fluid -->