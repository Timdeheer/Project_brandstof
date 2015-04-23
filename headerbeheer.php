<html>

<?php
include 'connectie.php';
?>


<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.js"></script>

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

                <a href='beheer.php'><p class="navbar-brand" style="color:lightgreen">TANKSTATION</p></a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">


                    <li><a href="registratie.php">Account aanmaken</a></li>
                    <li><a href="account_wijzigen.php">Account wijzigen</a></li>
                    <li><a href="content_wijzigen.php">Content wijzigen</a></li>
                    <li><a href="tijden_wijzigen.php">Tijden wijzigen</a></li>
                    <li><a href="aanbieding_toevoegen.php">Aanbieding</a></li>
                    <li><a href="product_toevoegen.php">Producten</a></li>
                    <li><a href="producten.php">Producten lijst</a></li>
                    <li><a href="logo_wijzigen.php">Logo wijzigen</a></li>
                    <li><div class=""></div><a href="uitloggen.php"><button name="submit" type="submit" value="Logout" class="btn btn-success btn-xs">Uitloggen</button></a></li>

                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

</body>

</html>
