<?php
//print_r($_POST);
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $sqlSelect = "select userid, firstname, lastname,username from users where username = :username and password = :password";

        $sth = $dbh->prepare($sqlSelect);


        $sth->execute(array(':username' => $_POST['username'], ':password' => sha1($_POST['password'])));

        $row = $sth->fetch(PDO::FETCH_ASSOC);

        if($row){
            $_SESSION['ln']= $row['lastname'];
            $_SESSION['fn']= $row['firstname'];
            $_SESSION['login'] = $_POST['username'];
        }
        if(isset($row) && !$row){
            echo "<h2>A bejelentkezés nem sikerült!</h2>";
            session_unset();
        }

    }
    catch (PDOException $e) {
        echo "Hiba: ".$e->getMessage();
    }
}
?>
