<?php

class AdminControlller {

    public function Index()
    {
        include_once 'views/admin/index.php';
    }
    public function Home()
    {

        include_once './views/admin/views/home.php';
    }
    public function Login()
    {

        include_once './views/admin/views/login.php';
    }
}