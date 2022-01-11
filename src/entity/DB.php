<?php

namespace Amaur\App\entity;

use Amaur\App\config\ConfigLocal;
use Amaur\App\config\ConfigProd;
use PDO;
use PDOException;

class DB {
    private static ?PDO $dbInstance = null;

    /**
     * Instance the PDO
     */
    public function __construct() {
        if($_SERVER['SERVER_NAME'] == "ageofempire-astucefr.elliacoj.be") {

            [$host, $dbName, $username, $password] = (new  ConfigProd())->getConfig();
        }
        else {
            [$host, $dbName, $username, $password] = (new  ConfigLocal())->getConfig();
        }

        try {
            self::$dbInstance = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8;", $username, $password);
            self::$dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    /**
     * Return Db instance
     * @return PDO
     */
    public static function getInstance():PDO {
        if(is_null(self::$dbInstance)) {
            new self();
        }
        return self::$dbInstance;
    }

    /**
     * For no clone by another dev
     */
    public function __clone() {}
}