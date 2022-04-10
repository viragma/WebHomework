<?php

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['emailadd'])) {

    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Létezik már a felhasználói név?
        $sqlSelect = "select userid from users where username = :username";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['username']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        }
        else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = "insert into users(userid,lastname, firstname, username,passw,email)
                          values(0, :lastname, :firstname, :username,:password,:email)";
            $stmt = $dbh->prepare($sqlInsert);
            //print_r($_POST);
            $stmt->execute(array(':lastname' => $_POST['lastname'], ':firstname' => $_POST['firstname'],
                                 ':username' => $_POST['username'],':password' => sha1($_POST['password']),':email' => $_POST['emailadd']));
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: $newid";
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    }
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();
        $ujra = true;
    }      
}
else {
    header("Location: .");
}
