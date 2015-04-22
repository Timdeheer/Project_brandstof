<?php
include 'connectie.php';
include 'headerbeheer.php';
include 'beheerindex.php';
?>
<div class="row">

    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">
        <?php
        $result = mysqli_query($con, "SELECT * FROM gebruikers");
        echo "<div class='content-display'>";

        echo "<table class='table table-striped table-hover'>";


        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            echo "<label for='gebruikersnaam'></label>";

            echo "<td>";
            echo $row["gebruikersnaam"];

            echo "</td>";
            echo "<td>";
            echo "<form action='#' method='post'>";
            echo "<button type='submit' name='gegevenswijzigen' class='btn btn-success' value='{$row['id']}'>Wijzigen</button>";
            echo"</form>";
            echo "<td>";
            echo "</tr>";
        }

        echo "</tabel>";
        echo "</div>";

        if (isset($_POST['gegevenswijzigen'])) {
        $id = $_POST['gegevenswijzigen'];

        $result2 = mysqli_query($con, "SELECT * FROM gebruikers WHERE id = $id");
        $row2 = mysqli_fetch_array($result2);
        ?>
        <form action="#" method="post">
            <table class='table table-striped table-hover'>

                <tr>
                    <td>
                        Gebruikersnaam:
                    </td>
                    <td>

                        <input class="form-group form-control" type="text" name="gebruikersnaam" id="gebruikersnaam" value="<?php echo $row2['gebruikersnaam'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        wachtwoord:
                    </td>
                    <td>
                        <input class="form-group form-control" type="text" name="wachtwoord" id="wachtwoord" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        naam:
                    </td>
                    <td>
                        <input class="form-group form-control" type="text" name="naam" id="naam" value="<?php echo $row2['naam'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        achternaam:
                    </td>
                    <td>
                        <input class="form-group form-control" type="text" name="achternaam" id="achternaam" value="<?php echo $row2['achternaam'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        rol
                    </td>
                    <td>
                        <input class="form-group form-control" type="text" name="rol" id="rol" value="<?php echo $row2['rol'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <?php echo "<button type='submit' class='btn btn-success' name='gegevensupdate' value={$row2['id']}>Wijzigen</button>"; ?>

                    </td>
                </tr>
            </table>





            <?php
            }
            if (isset($_POST['gegevensupdate'])) {
                $id_wijzigen = $_POST['gegevensupdate'];


                $gebruikersnaam = $_POST['gebruikersnaam'];
                $wachtwoord = $_POST['wachtwoord'];
                $naam = $_POST['naam'];
                $achternaam = $_POST['achternaam'];
                $rol = $_POST['rol'];

                $gebruikersnaam = mysqli_real_escape_string($con, $gebruikersnaam);
                $wachtwoord = mysqli_real_escape_string($con, $wachtwoord);
                $naam = mysqli_real_escape_string($con, $naam);
                $achternaam = mysqli_real_escape_string($con, $achternaam);
                $rol = mysqli_real_escape_string($con, $rol);

                $wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT);

                $query = mysqli_query($con, "UPDATE gebruikers SET gebruikersnaam='$gebruikersnaam', wachtwoord='$wachtwoord', naam='$naam', achternaam='$achternaam', rol='$rol' WHERE id = '$id_wijzigen'");


                ?>

            <?php
            }

            ?>


    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>

</div>
