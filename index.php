<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

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
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a id="login"  href="#" onclick="openForm()">Login</a>
                    <div class="form-popup" id="myForm">
                        <form method="post" action="src/logreg/login.php" class="form-container">
                            <label for="username"><b>Felhasználó név:</b></label>
                            <input type="text" placeholder="Username" name="username" required>

                            <label for="password"><b>Jelszó:</b></label>
                            <input type="password" placeholder="Password" name="password" required>

                            <button type="submit" class="btn">Login</button>
                            <a class="btn reg" id="login" href="src/logreg/login.html" >Regisztráció</a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
            <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <hr>
            <h3>Test</h3>
            <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS</p>
            </div>
            <div class="well">
                <p>ADS</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>Footer Text</p>
</footer>


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

