<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.js"></script>


    <title>Login</title>
</head>

<body>
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <p class="navbar-brand" style="color:lightgreen">TANKSTATION</p>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li></li>
                    <li> <?php echo "<h5 class='navbar-text'>Welkom ". $naam ."</h5>" ; ?></li>
                    <li><a href="mwtoevoegen.php">Medewerker toevoegen</a></li>
                    <li><a href="content.php">Content veranderen</a></li>
                    <li><a href="#">Shop(not available)</a></li>
                    <li><a href="openingstijdenshop.php">openingstijden pomp</a></li>
                    <li><a href="brandstof_prijzen.php">prijzen toevoegen</a></li>
                    <li><a href="uitloggen.php"><button name="submit" type="submit" value="Logout" class="btn btn-success">Uitloggen</button></a></li>

                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">


            <img src="assets/img/logo-brandstof.png" alt="login_logo" class="img-rounded center-block img-responsive">
            <h3 class="text-success text-center">Welkom op het Portaal van Tankstation!</h3>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>

</div>



</div>


<footer>

</footer>
</body>
</html>




