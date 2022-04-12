<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
//szerver oldali ellenőrzés példa
if(isset($_POST['kuld'])) {
    if (!isset($_POST['nev']) || strlen($_POST['nev']) < 5) {
        exit("Hibás név: " . $_POST['nev']);
    }

    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if (!isset($_POST['email']) || !preg_match($re, $_POST['email'])) {
        exit("Hibás email: " . $_POST['email']);
    }

    if (!isset($_POST['szoveg']) || empty($_POST['szoveg'])) {
        exit("Hibás szöveg: " . $_POST['szoveg']);
    }

    echo "Kapott értékek: ";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
//--------------------------------------------------------------------------------

try {
    // Kapcsolódás
    $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');


    $sqlInsert = "insert into contact(conid,cname,email,message) values (0,:name,:email,:message)";
    $stmt = $dbh->prepare($sqlInsert);
    //print_r($_POST);
    $stmt->execute(array(':name' => $_POST['nev'], ':email' => $_POST['email'],
        ':message' => $_POST['szoveg']));

}
    catch (PDOException $e) {
        $uzenet = "Hiba: ".$e->getMessage();

    }




}
?>
</body>
</html>
