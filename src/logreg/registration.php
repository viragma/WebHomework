<?php
 //print_r($_POST);
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        $sqlSelect = "select userid from users where username = :username";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':username' => $_POST['felhasznalo']));

        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {

            $uzenet = "A felhasználói név már foglalt!";
            $ujra = "true";
        }
        else {

            $sqlInsert = "insert into users(userid, firstname, lastname, username, password,email)
values(0, :firstname, :lastname, :username, :password, :email)";
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':firstname' => $_POST['vezeteknev'], ':lastname' => $_POST['utonev'],
                ':username' => $_POST['felhasznalo'], ':password' => sha1($_POST['jelszo']), ':email' => $_POST['email']));

            if($count = $stmt->rowCount()) {

                $newid = $dbh->lastInsertId();
                $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";
                $ujra = false;
            }
            else {
                $uzenet = "A regisztráció nem sikerült.";
                $ujra = true;
            }
        }
    }
    catch (PDOException $e) {
        echo "Hiba: ".$e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Regisztráció</title>
    <meta charset="utf-8">
</head>
<body>
<?php if(isset($uzenet)) { ?>
    <h1><?= $uzenet ?></h1>
    <?php if($ujra) { ?>
        <a href="regist.html">Próbálja újra!</a>
    <?php } ?>
<?php } ?>
</body>
</html>