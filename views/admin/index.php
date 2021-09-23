
<?php
$admin = new AdminControlller();

if (isset($_GET["admin"])) {
    switch ($_GET["admin"]) {
        case "":
            $admin->Login();
            break;
        case "login":
            $admin->Login();
            break;
        case "home":
            $admin->Home();
            break;
        default:
            $admin->Login('./');
            break;
    }
}
