<html>

<?php
include 'connectie.php'


 ?>


<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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

                        <a href='filiaalpagina.php'><p class="navbar-brand" text-danger style="color:red">TEXACO</p></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">


                            <li><a href="mwtoevoegen.php">Medewerker toevoegen</a></li>
                            <li><a href="content.php">Content veranderen</a></li>
                            <li><a href="product_toevoegen.php">Shop</a></li>
                            <li><a href="aanbieding_toevoegen.php">Aanbieding</a></li>
                            <li><a href="openingstijdenshop.php">Openingstijden pomp</a></li>
                            <li><a href="brandstof_prijzen.php">Prijzen toevoegen</a></li>
                            <li><div class=""></div><a href="uitloggen.php"><button name="submit" type="submit" value="Logout" class="btn btn-danger btn-xs">Uitloggen</button></a></li>

                        </ul>


                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->

            </nav>

    </body>

</html>
