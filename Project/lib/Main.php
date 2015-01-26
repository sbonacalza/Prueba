<?php

require_once BASE_PATH . "lib/da/da_Championships.php";

class Main {

    public function __construct() {
    }

    public function getGrill() {
        return da_Championships::getInstance()->getAllChampionships();
    }

    public function getTeamsOnChampionship($champId) {
        return da_Championships::getInstance()->getTeamsByChampId($champId);
    }
}