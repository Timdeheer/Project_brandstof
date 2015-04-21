<!DOCTYPE html>
<html>
<header>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.js"></script>

</header>
<body>


<?php
include 'header.php';
session_start();
$locatie = $_SESSION["locatie"];

?>

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2">

        </div>
        <div class="col-lg-8 col-md-8 col-sm-8">

            <a href="filiaalpagina.php">terug naar menu</a>
            <h2>Medewerker toevoegen</h2></br>
            <form class="form-horizontal" action="mwtoevoegen_cn.php" method="post">

                <table>
                    <tr>

                        <td>
                            <label for="gebruikersnaam"><h5><b>Gebruikersnaam</b></h5>
                            <input type="text" class="form-control" name="gebruikersnaam" id="gebruikersnaam" autocomplete="off">
                            </label>

                        </td>

                    </tr>
                    <tr>

                        <td>
                            <label for="Wachtwoord"><h5><b>Wachtwoord</b></h5>
                            <input type="password" class="form-control" name="wachtwoord" id="wachtwoord">
                            </label>
                        </td>
                    </tr>
                    <tr>


                        <td>
                            <label for="naam"><h5><b>Voornaam</b></h5>
                            <input type="text" class="form-control" name="naam" id="naam">
                            </label>
                        </td>
                    </tr>
                    <tr>

                        <td>
                            <label for="achternaam"><h5><b>Achternaam</b></h5>
                            <input type="text" class="form-control" name="achternaam" id="achternaam">
                            </label>

                        </td>
                    </tr>
                    <tr>

                        <td>


                <label for="rol"><h5><b>Rol in het bedrijf</b></h5>
                <?php
                include 'connectie.php';
                $sql = "SELECT * FROM rolmedewerker WHERE naam NOT LIKE 'filiaal-manager'";
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                     ?><select class="form-control" name="rol" id="rol">
                         <?php
                    while ($row = mysqli_fetch_object($result)) { ?>

                    <option value="<?php echo $row->id;  ?>"><?php echo $row->naam;  ?></option>
                </label>
                        <?php
                    }
                    echo "</select>";
                }
                ?>

            </td>
        </tr>
        <tr>

            <td>


                <label for="locatie"><h5><b>Vestiging</b></h5>
                <?php
                include 'connectie.php';
                $sql = "SELECT * FROM locaties WHERE id = '$locatie'";
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                     ?><select class="form-control" name="locatie" id="locatie">
                         <?php
                    while ($row = mysqli_fetch_object($result)) { ?>

                    <option value="<?php echo $row->id;  ?>"><?php echo $row->naam;  ?></option>

                        <?php
                    }
                    echo "</select>";
                }
                ?>

            </td>

        </tr>

        <tr>
            <td>
            </td>
            <td>
            <input  class="btn btn-success" type="submit" value="aanmaken">
            </td>
        </tr>


    </table>
</div>
    <div class="col-lg-2 col-md-2 col-sm-2"></div></div>
</body>
<footer>
</footer>
</html>
