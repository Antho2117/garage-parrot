<?php

namespace App\Core;

// On "importe" PDO
use PDO;
use PDOException;

class Db extends PDO
{
    private static $instance;

    // Informations de connexion

    // mysql://b81e1b7df39651:a1269857@us-cdbr-east-06.cleardb.net/heroku_1cc35ad065a2d91?reconnect=true

    private const DBHOST = 'us-cdbr-east-06.cleardb.net';
    //private const DBHOST = 'localhost';
    private const DBUSER = 'b81e1b7df39651';
    //private const DBUSER = 'root';
    private const DBPASS = 'a1269857';
    //private const DBPASS = 'root';
    private const DBNAME = 'heroku_1cc35ad065a2d9';
    //private const DBNAME = 'garage_parrot';


    private function __construct()
    {
        $_dsn = 'mysql:dbname='. self::DBNAME . ';host=' . self::DBHOST;
        //$_dsn = 'mysql:dbname='. $db . ';host=' . $server;


        try{
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);
            //parent::__construct($_dsn);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public static function getInstance():self
    {
        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }
}