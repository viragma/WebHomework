
<?php  include ("./logicals/galleria.php");?>


<?php
if (!empty($uzenet))
{
    echo '<ul>';
    foreach($uzenet as $u)
        echo "<li>$u</li>";
    echo '</ul>';
}
?>

<div id="galeria">
    <h1>Galéria</h1>
    <div> <?php if(isset($_SESSION['login'])) { ?><strong><?= include ("templates/pages/kepfeltoltes.tpl.php");?></strong><?php }
                        else {echo"<strong>A képek feltöltéséhez kérem jelentkezzen be!</strong> ";}
                        ?> </div>
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
    <div class="kep">
        <a href="<?php echo $MAPPA.$fajl ?>">
            <img src="<?php echo $MAPPA.$fajl ?>">
        </a>
        <p>Név:  <?php echo $fajl; ?></p>
        <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
    </div>
<?php
}
?>