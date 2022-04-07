<?php
//print_r($_POST);
if(isset($_POST['username']) && isset($_POST['password'])) {

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "select userid, firstname, lastname,username from users where username = :username and password = :password";

        $sth = $dbh->prepare($sqlSelect);


        $sth->execute(array(':username' => $_POST['username'], ':password' => sha1($_POST['password'])));

        $row = $sth->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e) {
        echo "Hiba: ".$e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Belépés</title>
    <meta charset="utf-8">
</head>
<body>
<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h1>Bejelentkezett: <strong><?= $row['firstname']." ".$row['lastname'] ?></strong> (<?= $row['username'] ?>)</h1>
    <?php } else { echo $row?>
        <h1>A bejelentkezés nem sikerült!</h1>
        <a href="login.html" >Próbálja újra!</a>
    <?php } ?>
<?php } ?>
</body>
</html>