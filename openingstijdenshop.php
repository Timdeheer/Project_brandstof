<?php
session_start();
$username = $_SESSION["gebruikersnaam"];
$id = $_SESSION["id"];
$naam = $_SESSION["naam"];
$functie = $_SESSION["functie"];
$locatie = $_SESSION["locatie"];
$rol = $_SESSION["rol"];
if ($rol == "1")
    {
include 'connectie.php';

echo "<table>";

$result = mysqli_query($con, "SELECT * FROM openingstijden WHERE locatieid = '$locatie'");
echo "<a href='beheer.php'>back to menu</a><br>";

//echo "<form action='#' method='post'>";
//echo "<button type='submit' name='tijdtoevoegen'}>dag toevoegen</button>";
echo "<tabel>";


while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";

    echo "<label for='gebruikersnaam'></label>";

    echo "<td>";
    echo $row["dag"];

    echo "</td>";
    echo "<td>";
    echo "<form action='#' method='post'>";
    echo "<button type='submit' name='gegevenswijzigen' value={$row['id']}>Wijzigen</button>";
    echo"</form>";
    echo "<td>";
    echo "</tr>";
}

echo "</tabel>";


    }


//    if (isset($_POST['tijdtoevoegen'])) {
        ?>
    <!--
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        Dag:
                    </td>
                    <td>
                        <input type="text" name="dag" id="dag">
                    </td>
                </tr>

                <tr>
                    <td>
                        van:
                    </td>
                    <td>
                        <input type="text" name="vantijd" id="vantijd" >
                    </td>
                </tr>

                <tr>
                    <td>
                        tot:
                    </td>
                    <td>
                        <input type="text" name="tottijd" id="tottijd" >
                    </td>
                </tr>



            </table>
        -->
            <?php
//        }

    if (isset($_POST['gegevenswijzigen'])) {
        $id = $_POST['gegevenswijzigen'];
        $result2 = mysqli_query($con, "SELECT * FROM openingstijden WHERE id = $id");
        $row2 = mysqli_fetch_array($result2);
        ?>
        <form action="#" method="post">
            <table>
                <tr>
                    <td>
                        Dag:
                    </td>
                    <td>
                        <?php echo $row2['dag'] ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        van:
                    </td>
                    <td>
                        <input type="text" name="vantijd" id="vantijd" value="<?php echo $row2['vantijd'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        tot:
                    </td>
                    <td>
                        <input type="text" name="tottijd" id="tottijd" value="<?php echo $row2['tottijd'] ?>">
                    </td>
                </tr>


                <tr>
                    <td>
                        <?php echo "<button type='submit' name='update' value={$row2['id']}>Wijzigen</button>"; ?>
                    </td>
                    <td>

                    </td>
                </tr>
            </table>


            <?php
        }


        if (isset($_POST['update'])) {
            $id_wijzigen = $_POST['update'];

            $con = mysqli_connect("localhost", "root", "");

            if (!$con) {
                die('Could not connect: ' . mysqli_error());
            }

            mysqli_select_db($con, "brandstof");

            $van = $_POST['vantijd'];
            $tot = $_POST['tottijd'];

            $van = mysqli_real_escape_string($con, $van);
            $tot = mysqli_real_escape_string($con, $tot);


            $query = mysqli_query($con, "UPDATE openingstijden SET vantijd='$van', tottijd='$tot' WHERE id = '$id_wijzigen'");
            header("location:openingstijdenshop.php");
        }
        ?>
