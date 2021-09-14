<?php
class Connect
{

    static public function conectar()
    {
        $link = new PDO("mysql:host=windowssolutionsbd.mssql.somee.com;dbname=windowssolutionsbd", "websolutions_SQLLogin_1", "bpb58vxxk6");
        // "mysql:host=windowssolutionsbd.mssql.somee.com;dbname=windowssolutionsbd","websolutions_SQLLogin_1", "bpb58vxxk6"
        $link->exec("set names utf8");
        return $link;
    }
}
