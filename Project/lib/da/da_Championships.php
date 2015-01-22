<?php

require BASE_PATH . "lib/Config/Config.php";

class da_Championships {
    private static $instance;

    private $dataBaseCredentials;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new da_Championships();
        }

        return self::$instance;
    }

    public function __construct() {
        $this->dataBaseCredentials = array(
            'host'     => Config::get('DataBase.hostname'),
            'user'     => Config::get('DataBase.username'),
            'pwd'      => Config::get('DataBase.password'),
            'dataBase' => Config::get('DataBase.database'),
        );

    }

    public function getAllChampionships() {
        var_dump($this->dataBaseCredentials);
        die();
    }
} 