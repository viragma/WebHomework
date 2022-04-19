<?php session_start();

?>

<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css" type="text/css">
    <script type="text/javascript" src="/js/registcheck.js"></script>
    <script type="text/javascript" src="/js/kapcsolatcheck.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class=""></div>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">KA</div>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <?php foreach ($oldalak as $url => $oldal) { ?>
                    <?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
                        <li<?= (($oldal == $keres) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                                <?= $oldal['szoveg'] ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li><div> <?php if(isset($_SESSION['login'])) { ?><strong><?= $_SESSION['ln']." ".$_SESSION['fn']." (".$_SESSION['login'].")" ?></strong><?php }
                        else {echo"<strong>Vendég</strong> ";}
                        ?> </div></li>
            </ul>

        </div>
    </div>
</nav>




<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="mb-3"><?= $fejlec['cim'] ?></h1>
        <p class="lead"><?php if (isset($fejlec['motto'])) { ?><h5 class="mb-3"><?= $fejlec['motto'] ?></h5><?php } ?>

    </div>
</div>








<div class="container-fluid text-center ">
    <div class="row content">
        <div class=" col-sm-2 sidenav visible-xs-block, hidden-xs">


    </ul>
            </div>
        <div class="col-sm-8 text-left">

            <div id="content">
                <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
            </div>
        </div>
        <div class="col-sm-2 sidenav visible-xs-block, hidden-xs">

        </div>
    </div>
</div>

        </aside>

    </div>
    <footer class="container-fluid text-center">
        <?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		&nbsp;
        <?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
    </footer>
</body>
</html>
