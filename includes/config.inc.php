<?php
$ablakcim = array(
    'cim' => 'Kecske Simogato',
);

$fejlec = array(
    'kepforras' => 'kecskelogo.png',
    'kepalt' => 'logo',
	'cim' => 'Kecske Simogató',
	'motto' => 'Kutyánk nincs, de a kecske is jól fut szánon, és ha utolér garantálom jobban örülnél, ha kutyánk lenne!!'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Kecske Simogató Kft.'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),
    'galleria' => array('fajl' => 'galleria', 'szoveg' => 'Galléria', 'menun' => array(1,1)),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => '', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$MAPPA = './kepek/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;




$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>