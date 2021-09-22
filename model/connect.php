<?php
class Connect
{

    static public function conectar()
    {
        $link = new PDO("mysql:host=sql3.freemysqlhosting.net;dbname=sql3439068", "sql3439068", "AHqviRRkqm");
        $link->exec("set names utf8");
        return $link;
    }
}

