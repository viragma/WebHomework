<?php if(isset($row)) { ?>
    <?php if($row) { ?>
       <div class=""><h1>Üdvözöljük:<strong> <?= $row['lastname']." ".$row['firstname'] ?></strong></h1></div>

    <?php } else { ?>
        <h1>A bejelentkezés nem sikerült!</h1>
        <a href="?oldal=belepes" >Próbálja újra!</a>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>
