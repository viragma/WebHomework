<?php
// Megjelenítés
include('./includes/config.inc.php');

// adatok összegyűjtése:
$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false)
    if (is_file($MAPPA.$fajl)) {
        $vege = strtolower(substr($fajl, strlen($fajl)-4));
        if (in_array($vege, $TIPUSOK))
            $kepek[$fajl] = filemtime($MAPPA.$fajl);
    }
closedir($olvaso);
?>


<!--"Feltöltés"-->
<?php
include('./includes/config.inc.php');
$uzenet = array();

// Űrlap ellenőrzés:
if (isset($_POST['kuld'])) {
    //print_r($_FILES);
    foreach($_FILES as $fajl) {
        if ($fajl['error'] == 4);   // Nem töltött fel fájlt
        elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
            $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
        elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
            or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
            or $fajl['size'] > $MAXMERET)
            $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
        else {

            $vegsohely = $MAPPA.strtolower($fajl['name']);

            if (file_exists($vegsohely))
                $uzenet[] = " Már létezik: " . $fajl['name'];
            else {
                move_uploaded_file($fajl['tmp_name'], $vegsohely);
                $uzenet[] = ' Ok: ' . $fajl['name'];


            }
        }
    }
}

?>


