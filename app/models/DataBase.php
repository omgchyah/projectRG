<?php

//creado la base de datos
class DataBase {

    const server = "localhost";
    const userdb = "omgchyah";
    const password = "Yur1.12345";
    const namedb = "usertasks";

    //sin necesidad de instaciar la clase de datos
    public static function connect(){
        try {
            $connection = new PDO("mysql:host=".self::server.";
            dbname=".self::namedb.";charset=utf8",
            self::userdb,self::password);

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch(PDOException $e) {
            return false . $e->getMessage();

        }
    }






}