<?php
session_start();
$username = $_SESSION["gebruikersnaam"];
$id = $_SESSION["id"];
$naam = $_SESSION["naam"];
$functie = $_SESSION["functie"];
if ($functie == "1") 
    {
    include 'connectie.php';

    echo "<table>";

    $result = mysqli_query($con, "SELECT * FROM gebruikers");
    echo "<a href='beheer.php'>back to menu</a>";
    echo "<tabel>";


    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";

        echo "<label for='gebruikersnaam'></label>";

        echo "<td>";
        echo $row["gebruikersnaam"];

        echo "</td>";
        echo "<td>";
        echo "<form action='#' method='post'>";
        echo "<button type='submit' name='gegevenswijzigen' value={$row['id']}>Wijzigen</button>";
        echo"</form>";
        echo "<td>";
        echo "</tr>";
    }

    echo "</tabel>";

    if (isset($_POST['gegevenswijzigen'])) {
        $id = $_POST['gegevenswijzigen'];

        $result2 = mysqli_query($con, "SELECT * FROM gebruikers WHERE id = $id");
        $row2 = mysqli_fetch_array($result2);
        ?>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        Gebruikersnaam:
                    </td>
                    <td>	
                        <input type="text" name="gebruikersnaam" id="gebruikersnaam" value="<?php echo $row2['gebruikersnaam'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        wachtwoord:
                    </td>
                    <td>
                        <input type="text" name="wachtwoord" id="wachtwoord" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        naam:
                    </td>
                    <td>
                        <input type="text" name="naam" id="naam" value="<?php echo $row2['naam'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        achternaam:
                    </td>
                    <td>
                        <input type="text" name="achternaam" id="achternaam" value="<?php echo $row2['achternaam'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        rol
                    </td>
                    <td>
                        <input type="text" name="rol" id="rol" value="<?php echo $row2['rol'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>	
                    </td>
                    <td>
        <?php echo "<button type='submit' name='gegevensupdate' value={$row2['id']}>Wijzigen</button>"; ?>

                    </td>
                </tr>
            </table>





        <?php
    }
    if (isset($_POST['gegevensupdate'])) {
        $id_wijzigen = $_POST['gegevensupdate'];

        $con = mysqli_connect("localhost", "root", "");

        if (!$con) {
            die('Could not connect: ' . mysqli_error());
        }

        mysqli_select_db($con, "brandstof");

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

        $query = mysqli_query($con, "UPDATE gebruikers SET gebruikersnaam='$gebruikersnaam', wachtwoord='$wachtwoord', naam='$naam', achternaam='$achternaam', rol='$rol' WHERE id = '$id_wijzigen'");
        header("location:account_wijzigen.php");
    }
} else {
    header("location:login.html");
}
?>
