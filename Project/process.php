<?php

require dirname(realpath(__FILE__)) . "/" . "config/Constants.php";
require BASE_PATH . "lib/Main.php";

$main = new Main($_POST['car']);

