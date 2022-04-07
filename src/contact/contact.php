<?php
//print_r($_POST);

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) ) {

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=webproghw', 'root', '',
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');


        $sqlInsert = "insert into contact(conid,firstname,lastname,email,subject,message,condate) values (0,:firstname,:lastname,:email,:subject,:message,now())";

        $stmt = $dbh->prepare($sqlInsert);


        $stmt->execute(array(':firstname' => $_POST['firstname'],':lastname'=> $_POST['lastname'],':email'=>$_POST['email'],':subject'=>$_POST['subject'],':message'=>$_POST['message']));

        if($count = $stmt->rowCount()) {
            $uzenet = "Az üzenet küldése sikeres";

        }
        else {
            $uzenet = "A küldés sikertelen";

        }
    }
    catch (PDOException $e) {
        echo "Hiba: ".$e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Contact</title>
    <meta charset="utf-8">
</head>
<body>
<?php if(isset($uzenet)) { ?>
    <h1><?= $uzenet ?></h1>
    Vezetéknév: <?php echo $_POST['lastname'] ?><br>
    Keresztnév: <?php echo $_POST['firstname'] ?><br>
    Email: <?php echo $_POST['email'] ?><br>
    Tárgy: <?php echo $_POST['subject'] ?><br>
    Üzenet: <?php echo $_POST['message'] ?>

<?php } ?>
</body>
</html>