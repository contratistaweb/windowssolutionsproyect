<?php

class PagesControlller
{

    public function Index()
    {
        include_once 'views/pages/index.php';
    }
    public function Home($nv)
    {

        include_once './views/pages/views/home.php';
    }
    public function Services()
    {

        include_once './views/pages/views/services.php';
    }
    public function Galery()
    {

        include_once './views/pages/views/galery.php';
    }
    public function Quotes()
    {

        include_once './views/pages/views/quotes.php';
    }
    public function About()
    {

        include_once './views/pages/views/about.php';
    }
    public function Blog()
    {

        include_once './views/pages/views/blog.php';
    }
    public function Contact()
    {

        include_once './views/pages/views/contact.php';
    }
    public function PageNotFound()
    {

        include_once './views/shared/page_not_found.php';
    }
    public function Header()
    {

        include_once './views/shared/header.php';
    }
    public function Footer()
    {

        include_once './views/shared/footer.php';
    }
    public function Details()
    {

        include_once './views/pages/views/details.php';
    }
    public function TitlePage($title)
    {

        echo '<script>

        
            $("head").append("<title>Windows Solutions | ' . $title . '</title>");
        </script>';
    }
}
