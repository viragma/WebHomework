<?php

try {
    // Kapcsolódás
    $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    // Létezik már a felhasználói név?
    $sqlSelect = "select * from contact order by condate desc";
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();

    while ($row = $sth->fetch()) {
        echo "<table style='width=100%'>";
        echo "<tr>";
        echo "<th>".$row['cname']."<br />\n"."</th>";
        echo "<th>".$row['email']."<br />\n"."</th>";
        echo "<th>".$row['message']."<br />\n"."</th>";
        echo "<th>".$row['condate']."<br />\n"."</th>";
        echo "</tr>";
        echo "</table>";
    }

} catch (PDOException $e) {
    $uzenet = "Hiba: " . $e->getMessage();

}?>
