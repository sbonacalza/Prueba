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
        $data = array();
        $connection = new mysqli(
            $this->dataBaseCredentials['host'], $this->dataBaseCredentials['user'],
            $this->dataBaseCredentials['pwd'], $this->dataBaseCredentials['dataBase']
        );

        $query = "SELECT * FROM prueba_ch";

        $results = $connection->prepare($query);

        $results->execute();
        $results->bind_result($id, $name);

        $count = 0;

        while ($results->fetch()) {
            $data[$count]['ID'] = $id;
            $data[$count]['NAME'] = $name;

            $count++;
        }

        return $data;
    }

    public function getTeamsByChampId($champId) {
        $data = array();
        $connection = new mysqli(
            $this->dataBaseCredentials['host'], $this->dataBaseCredentials['user'],
            $this->dataBaseCredentials['pwd'], $this->dataBaseCredentials['dataBase']
        );

        $query = "SELECT t_id, t_name FROM prueba_ch_teams where ch_id = ?";

        $results = $connection->prepare($query);

        $results->bind_param('s', $champId);
        $results->execute();
        $results->bind_result($id, $name);

        $count = 0;

        while ($results->fetch()) {
            $data[$count]['ID'] = $id;
            $data[$count]['NAME'] = $name;

            $count++;
        }

        return $data;
    }
} 