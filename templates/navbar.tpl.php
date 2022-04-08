<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
    <!--        <ul class="nav navbar-nav">
                <li class="active"><a href=".">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="?oldal=kapcsolat">Contact</a></li>
            </ul>-->
            <h1><?= $fejlec['cim'] ?></h1>
            <?php foreach ($oldalak as $url => $oldal) { ?>
                <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                    <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                        <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                            <?= $oldal['szoveg'] ?></a>
                    </li>
                <?php } ?>
            <?php } ?>



            <header>
                <img id="logo" src="./images/<?=$fejlec['kepforras']?>" alt="<?=$fejlec['kepalt']?>">
                <h1><?= $fejlec['cim'] ?></h1>
                <?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
                <?php if(isset($_SESSION['login'])) { ?>Bejlentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
            </header>





            <ul class="nav navbar-nav navbar-right">

                <?php
                if(isset($_SESSION['login']))
                    echo "<li><a>".$_SESSION['fn']." ".$_SESSION['ln']."</a></li>";
                    else echo "<li><a>Vendég</a></li>";
                if(!isset($_SESSION['login']))  echo '<li><a id="login"  href="#" onclick="openForm()">Login</a>';
                    else echo '<li><a  href="logout.php" >Kilépés</a></li>';
                //print_r($_SESSION);
                ?>


                    <div class="form-popup" id="myForm">
                        <form method="post" action="src/logreg/login.php" class="form-container">
                            <b>Felhasználó név:</b>
                            <input type="text" placeholder="Username" name="username" required>

                            <b>Jelszó:</b>
                            <input type="password" placeholder="Password" name="password" required>
                              <button type="submit" class="btn">Login</button>';


                            <a class="btn reg" href="src/logreg/login.html" >Regisztráció</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
