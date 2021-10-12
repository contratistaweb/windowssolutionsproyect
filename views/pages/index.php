<?php
$pages = new PagesControlller();
$pages->Header(); ?>
<div class="container">
    <div class="row d-flex justify-content-center align-items-middle mt-5">

        <?php

        if (isset($_GET["pag"])) {
            switch ($_GET["pag"]) {
                case "":
                    $pages->Home('./');
                    break;
                case "home":
                    $pages->Home('./');
                    break;
                case "services":
                    $pages->Services();
                    break;
                case "quotes":
                    $pages->Quotes();
                    break;
                case "about":
                    $pages->About();
                    break;
                case "galery":
                    $pages->Galery();
                    break;
                case "blog":
                    $pages->Blog();
                    break;
                case "contact":
                    $pages->Contact();
                    break;
                case "details":
                    $pages->Details();
                    break;
                default:
                    $pages->PageNotFound();
                    break;
            }
        } else {
            $pages->Home('./');
        }
        ?>

    </div>
</div>
<?php $pages->Footer(); ?>