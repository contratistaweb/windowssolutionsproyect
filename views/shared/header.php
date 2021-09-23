<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="#" class=""><span class="mr-2  icon-envelope-open-o"></span> <span class="d-none d-md-inline-block">info@windowssolutions.somme.com</span></a>
                <span class="mx-md-2 d-inline-block"></span>
                <a href="#" class=""><span class="mr-2  icon-phone"></span> <span class="d-none d-md-inline-block"> (+57604) 567 9101</span></a>


                <div class="float-right">

                    <a href="#" class=""><span class="mr-2  icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
                    <span class="mx-md-2 d-inline-block"></span>
                    <a href="#" class=""><span class="mr-2  icon-facebook"></span> <span class="d-none d-md-inline-block">Facebook</span></a>

                </div>

            </div>

        </div>

    </div>
</div>

<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
                <a href="./?pag=home" class="text-black"><span class="text-primary">Brand</a>
            </div>

            <div class="col-12">
                <nav class="site-navigation text-right ml-auto " role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="./?pag=home" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="home"?print "active":print ""):print "active" ?>">Inicio</a></li>
                        <li><a href="./?pag=services" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="services"?print "active":print ""):print "" ?>">Servicios</a></li>
                        <li><a href="./?pag=galery" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="galery"?print "active":print ""):print "" ?>">Galeria</a></li>
                        <li><a href="./?pag=quote" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="quote"?print "active":print ""):print "" ?>">Cotizaciones</a></li>
                        <li class="has-children">
                            <a href="./?pag=about" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="about"?print "active":print ""):print "" ?>">Sobre nosotros</a>
                            <ul class="dropdown arrow-top">
                                <li><a href="#team-section" class="nav-link">Equipo</a></li>
                                <li><a href="#why-us-section" class="nav-link">Por que elejirnos</a></li>
                                <li><a href="#faq-section" class="nav-link">Preguntas frecuentes</a></li>
                                <li class="has-children">
                                    <a href="#">Corporativo</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Historia</a></li>
                                        <li><a href="#">Misión</a></li>
                                        <li><a href="#">Visión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        
                        <li><a href="./?pag=blog" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="blog"?print "active":print ""):print "" ?>">Blog</a></li>
                        <li><a href="./?pag=contact" class="nav-link <?php isset($_GET["pag"]) ? ($_GET["pag"]=="contact"?print "active":print ""):print "" ?>">Contactenos</a></li>
                    </ul>
                </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>