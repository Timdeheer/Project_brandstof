<?php
session_start();
include 'header.php';
?>

<style type="text/css">
.textarea { width: 1000px; height: 50px; border: 1px solid #999999; padding: 5px; }


</style>
<div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2"></div>
    <div class="col-lg-8" col-md-8 col-sm-8>
<?php

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
        echo "</br></br>";

        echo "</td>";
        echo "<td>";
        echo "<form action='#' method='post'>";
        echo "<button class='btn btn-success' type='submit' name='gegevenswijzigen' value={$row['id']}>Wijzigen</button>";
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
    </br>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        <input class="textarea" type="text" name="tekst" id="tekst" value="<?php echo $row2['tekst'] ?>" autocomplete="off">
                    </td>
                </tr>

                <tr>


                    <td>
                    </br>
                <button type="submit" name="update" value="<?php $row2['id'] ?>" class="btn btn-success btn-xs">Wijzigen</button>

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
</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
