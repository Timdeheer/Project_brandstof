<?php
include 'connectie.php';
session_start();
$functie = $_SESSION['functie'];
if($functie > "0")
    include 'headerbeheer.php';

else{
    include 'header.php';
}
include 'beheerindex.php';
?>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">

        <h1>Account aanmaken</h1>
        <form action="registratie_cn.php" method="post">
            <table class="table table-responsive">
                <tr>
                    <td>
                        Gebruikersnaam:
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" name="gebruikersnaam" id="gebruikersnaam">
                        </div>

                    </td>
                </tr>
                <tr>
                    <td>
                        wachtwoord:
                    </td>
                    <td>
                        <div class="form-group">
                        <input type="text" class="form-control" name="wachtwoord" id="wachtwoord">
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        naam:
                    </td>
                    <td>
                        <div class="form-group">
                        <input type="text" class="form-control" name="naam" id="naam">
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        achternaam:
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" name="achternaam" id="achternaam">
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        rol
                    </td>
                    <td>

                        <div class="form-group">

                        <?php

                        $sql = "SELECT * FROM rolmedewerker";
                        $result = mysqli_query($con, $sql);

                        $count = mysqli_num_rows($result);
                        if ($count > 0) {
                        ?><select class="form-control" name="rol" id="rol">
                            <?php
                            while ($row = mysqli_fetch_object($result)) { ?>

                                <option value="<?php echo $row->id;  ?>"><?php echo $row->naam;  ?></option>

                            <?php
                            }
                            echo "</select>";
                            }
                            ?>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        locatie
                    </td>
                    <td>


                        <div class="form-group">
                        <?php

                        $sql = "SELECT * FROM locaties";
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
                        </div>
                    </td>

                </tr>

                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" class="btn btn-danger" value="aanmaken">
                    </td>
                </tr>
    </div>
    </table>

</div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>
