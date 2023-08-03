<?php

namespace App;

class Connection{

    public static function getDb(){
        try{

            $conn = new \PDO(
                "mysql:host=localhost;dbname=db_twitter_clone;charset=utf8",
                "root",
                "724405"
            );

            return $conn;

        }catch (\PDOException $e){
            //..tratar conexão posteriormente..//
        }
    }
}

?>