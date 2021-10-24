<?php
$admin = new AdminController();

if (isset($_GET["admin"])) {
    switch ($_GET["admin"]) {
        case "":
            $admin->Login();
            break;
        case "login":
            $admin->Login();
            break;
        case "home":
            $admin->AdminLayout();
            break;
        case "contact":
            $admin->AdminLayout();
            break;
        case "users":
            $admin->AdminLayout();
            break;
        case "images":
            $admin->AdminLayout();
            break;
        case "content":
            $admin->AdminLayout();
            break;
        case "products":
            $admin->AdminLayout();
            break;
        default:
            $admin->Login('./');
            break;
    }
}
