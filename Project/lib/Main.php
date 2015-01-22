<?php

require_once BASE_PATH . "lib/da/da_Championships.php";

class Main {
    private $data;

    public function __construct($data) {
        $this->data = $data;
        $this->renderGrill();
    }

    private function renderGrill() {
        $dataToRespond = array();

        $dataToRespond = da_Championships::getInstance()->getAllChampionships();
    }
} 