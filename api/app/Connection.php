<?php

namespace App;

class Connection
{

    public static function getDb()
    {
        try {
            $conn = new \PDO(
                "mysql:host=mysql;dbname=pcguidedev;charset=utf8",
                "root",
                "root"
            );
            return $conn;
        } catch (\PDOException $e) {
            echo 'Erro' . $e;
        }
    }
}
