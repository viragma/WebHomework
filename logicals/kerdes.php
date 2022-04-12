<?php

    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Létezik már a felhasználói név?
        $sqlSelect = "select * from users ";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute();
        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
          //  $uzenet = "A felhasználói név már foglalt!";
           //$ujra = "true";
           //S print_r($row['username']);
        }
    }

    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }
