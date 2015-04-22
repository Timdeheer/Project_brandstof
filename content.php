<?php
session_start();
?>

<style type="text/css">
.textarea { width: 1000px; height: 50px; border: 1px solid #999999; padding: 5px; }


</style>

<?php
include 'header.php';
$username = $_SESSION["gebruikersnaam"];
$id = $_SESSION["id"];
$naam = $_SESSION["naam"];
$functie = $_SESSION["functie"];
$locatie = $_SESSION["locatie"];

    include 'connectie.php';

    echo "<table>";

    $result = mysqli_query($con, "SELECT * FROM locatietext WHERE locatie = ".$locatie);
    echo "<tabel>";


    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";

        echo "<label for='gebruikersnaam'></label>";

        echo "<td>";
        echo $row["tekst"];

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

        $result2 = mysqli_query($con, "SELECT * FROM locatietext WHERE id = ".$id);
        $row2 = mysqli_fetch_array($result2);
        ?>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        <input class="textarea" type="text" name="tekst" id="tekst" value="<?php echo $row2['tekst'] ?>" autocomplete="off">
                    </td>
                </tr>

                <tr>

                    <td>
        <?php echo "<button type='submit' name='update' value={$row2['id']}>Wijzigen</button>"; ?>

                    </td>
                </tr>
            </table>

        <?php
    }

    if (isset($_POST['update'])) {
        $id_wijzigen = $_POST['update'];
       	include 'connectie.php';

        $tekst = $_POST['tekst'];

        $query = mysqli_query($con, "UPDATE locatietext SET tekst='$tekst' WHERE id = '$id_wijzigen'");


        header("location:content.php");
    }

?>
