<?php

require dirname(realpath(__FILE__)) . "/" . "config/Constants.php";
require BASE_PATH . "lib/Main.php";

$main = new Main();

$results = $main->getGrill();

?>

<form method="POST" name="myform" action="process.php">
    <select id="campeonatos" name="campeonatos">
        <? foreach ($results as $result) { ?>
            <option value="<? echo $result['ID'] ?>"><? echo $result['NAME'] ?></option>
        <? } ?>
    </select>
    <INPUT TYPE="submit" name="Buscar" />
</form>
