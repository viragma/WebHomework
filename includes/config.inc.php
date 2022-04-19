<?php
$ablakcim = array(
    'cim' => 'Kecske Simogato',
);

$fejlec = array(

	'cim' => 'Kerekerdő Alapítvány',
	'motto' => 'Kutyánk nincs, de a kecske is jól fut szánon, és ha utolér garantálom jobban örülnél, ha kutyánk lenne!!'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Kerekerdő Alapítvány.'
);

$oldalak = array(
	'/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
	'rolunk' => array('fajl' => 'rolunk', 'szoveg' => 'Rólunk', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => '', 'menun' => array(0,0)),
    'kerdes' => array('fajl' => 'kerdes', 'szoveg' => 'Kérdések', 'menun' => array(0,1)),
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