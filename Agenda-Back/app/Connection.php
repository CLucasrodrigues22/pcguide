<?php

namespace App;

class Connection {

    public static function getDb() {
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=agenda;charset=utf8",
                "root",
                "password"
            );

            return $conn;
        } catch (\PDOException $e) {
            echo 'Erro'.$e;
        }
    }
}