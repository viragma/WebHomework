<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<?php include("src/navbar.tpl.php") ?>

<div class="container-fluid text-center">
    <div class="row content">
    <?php include("src/asside.html");?>
        <div class="col-sm-8 text-left">

        <?php include("src/contact.html");
        ?>
        </div>
         <?php include("src/assidright.html");
    ?>
    </div>
</div>


<?php include("src/footer.html") ?>

<script>
    function openForm() {
        let isPress= document.getElementById("login").textContent;
        if (isPress=="Login") {
            console.log(isPress);

            document.getElementById("myForm").style.display = "block";
            document.getElementById("login").textContent = "Cancel"
        }else{
            document.getElementById("login").textContent = "Login"
            document.getElementById("myForm").style.display = "none";
        }
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>

</body>
</html>

