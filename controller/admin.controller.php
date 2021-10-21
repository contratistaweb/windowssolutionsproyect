<?php

class AdminController
{

    public function Index()
    {
        include_once 'views/admin/index.php';
    }

    public function AdminLayout()
    {
        include_once './views/admin/admin_layout.php';
    }

    public function Login()
    {

        include_once './views/admin/components/login.php';
    }

    public function TitlePage($title)
    {
        echo '<script>
            $("head").append("<title>Dashboard Windows Solutions | ' . $title . '</title>");
        </script>';
    }
}
