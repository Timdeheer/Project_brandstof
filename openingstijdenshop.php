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
include 'header.php';

?>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">


        <?php
        echo "<table class='table-responsive'>";

        $result = mysqli_query($con, "SELECT * FROM openingstijden WHERE locatieid = '$locatie'");


        //echo "<form action='#' method='post'>";
        //echo "<button type='submit' name='tijdtoevoegen'}>dag toevoegen</button>";
        echo "<table class='table table-responsive'>";


        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

                echo "<label for='gebruikersnaam'></label>";

                    echo "<td>";
                    echo $row["dag"];

                    echo "</td>";
                        echo "<td></td>";
                            echo "<td>";
                            echo "<form action='#' method='post'>";
                            echo "<div class='form-group'>";

                            echo "<button class='btn btn-danger btn-xs' type='submit' name='gegevenswijzigen' value={$row['id']}>Wijzigen</button>";
                            echo "</div>";
                            echo "</form>";
                            echo "<td>";
            echo "</tr>";
        }
        echo "</tabel>";
        }
        ?>

        <?php
        //        }

        if (isset($_POST['gegevenswijzigen'])) {
        $id = $_POST['gegevenswijzigen'];
        $result2 = mysqli_query($con, "SELECT * FROM openingstijden WHERE id = $id");
        $row2 = mysqli_fetch_array($result2);
        ?>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4">

                <form action="#" method="post">
                    <table class="table table-responsive">
                        <tr>
                            <td>
                                Dag:
                            </td>
                            <td></td>
                            <td>
                                <?php echo $row2['dag'] ?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                van:
                            </td>
                            <td></td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="vantijd" id="vantijd"
                                           value="<?php echo $row2['vantijd'] ?>">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                tot:
                            </td>
                            <td></td>
                            <td>
                                <input class="form-control" type="text" name="tottijd" id="tottijd" value="<?php echo $row2['tottijd'] ?>">
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <?php echo "<button class='btn btn-danger btn-xs' type='submit' name='update' value={$row2['id']}>Wijzigen</button>"; ?>
                            </td>
                            <td></td>
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
//                        header("location:openingstijdenshop.php");

                    }
                    ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
        </div>


    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>
