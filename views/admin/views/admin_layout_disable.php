


            <?php
            if (isset($_GET["mod"])) {
                switch ($_GET["mod"]) {
                    case "":
                        include "./views/admin/login.php";
                        break;
                    case "login":
                        include "./views/admin/login.php";
                        break;
                    default:
                        include "./views/page_not_found.php";
                        break;
                }
            } else {
                include "/admin/views/login.php";
            }
            ?>

