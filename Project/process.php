<?php

require dirname(realpath(__FILE__)) . "/" . "config/Constants.php";
require BASE_PATH . "lib/Main.php";

$main = new Main();

$resultsTeams = $main->getTeamsOnChampionship($_POST['campeonatos']);

?>

<table style="width:100%">
    <? foreach ($resultsTeams as $result) { ?>
    <tr>
        <td> <? echo $result['NAME'] ?> </td>
    </tr>
    <? } ?>
</table>

<button onclick="goBack()">Go Back</button>

<script>
    function goBack() {
        window.history.back()
    }
</script>