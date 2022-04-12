<?php


include('./includes/config.inc.php');

//$keres = current($oldalak);
$keres = $oldalak['/'];
if (isset($_GET['oldal'])) {
    if (isset($oldalak[$_GET['oldal']]) && file_exists("./templates/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")) {
        $keres = $oldalak[$_GET['oldal']];
    } else if (isset($sidepage[$_GET['oldal']]) && file_exists("./templates/pages/{$sidepage[$_GET['oldal']]['fajl']}.tpl.php")) {
        $keres = $sidepage[$_GET['oldal']];
    }

    else {
        $keres = $hiba_oldal;
        header("HTTP/1.0 404 Not Found");
    }
}

include('./templates/index.tpl.php');


?>
