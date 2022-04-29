
<?php  include ("./logicals/galeria.php");?>


<?php
if (!empty($uzenet))
{
    echo '<ul>';
    foreach($uzenet as $u)
        echo "<li>$u</li>";
    echo '</ul>';
}
?>


    <div class="container-fluid">

        <h1 class="fw-light text-center text-lg-start mt-4 mb-0">Galéria</h1>
        <div> <?php if(isset($_SESSION['login'])) { ?><strong><?= include ("templates/pages/kepfeltoltes.tpl.php");?></strong><?php }
            else {echo"<strong>A képek feltöltéséhez kérem jelentkezzen be!</strong> ";}
            ?> </div>
        <hr class="mt-2 mb-5">

        <div class="row text-center text-lg-start">

    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>


                <div class="col-lg-4 col-md-6 col-sm-9 col-6">
                    <a href="<?php echo $MAPPA.$fajl ?>" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="<?php echo $MAPPA.$fajl ?>" alt="">
                    </a>
                </div>


<?php
}
?>
        </div>

    </div>

