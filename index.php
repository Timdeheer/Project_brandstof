<?php
$locatie_id='2';

include 'connectie.php';

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.js"></script>

</head>
<body>
<div class="container-fluid">





<?php

$sqli = "SELECT post_thumbnail from banners ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con,$sqli);
while ($row = $result->fetch_assoc()) {

    echo "<img src='{$row['post_thumbnail']}' alt='index_logo' class='img-rounded center-block img-responsive'>";

}


?>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <table class="table table-responsive  text-center" style="background-color: lightgreen;color:white;">
                <tr>
                    <td>
                        <?php
                        $results = $con->query("SELECT * FROM fuel WHERE brandstof='DIESEL' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
                        if($row = $results->num_rows > 0) {
                            while($row = $results->fetch_object()) {
                                echo " <h3 class='text-capitalize'>".$row->brandstof."</h3> "."<h2> &euro; ". $row->prijzen."</h2>";
                            }
                        }
                        ?>
                </td>
                </tr>
                </table>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">

            <table class="table table-responsive text-center"style="background-color: lightgreen;color:white;">
                <tr>
                    <td>
                        <?php
                        $results = $con->query("SELECT * FROM fuel WHERE brandstof='euro95' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
                        if($row = $results->num_rows > 0) {
                            while($row = $results->fetch_object()) {
                                echo " <h3 class='text-capitalize'>".$row->brandstof."</h3> "."<h2> &euro; ". $row->prijzen."</h2>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <table class="table table-responsive text-center"style="background-color: lightgreen;color:white;">
                <tr>
                    <td>
                        <?php
                        $results = $con->query("SELECT * FROM fuel WHERE brandstof='lpg' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
                        if($row = $results->num_rows > 0) {
                            while($row = $results->fetch_object()) {
                                echo " <h3 class='text-capitalize'>".$row->brandstof."</h3> "."<h2> &euro; ". $row->prijzen."</h2>";
                            }
                        }
                        ?>
                    </td>
                </tr>
            </table>

        </div>


<!-- end prijzen -->
        
<div class="col-lg-4 col-md-4 col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="text-center text-uppercase"><h4>Openingstijden Tankstation</h4></div>
            <table class="table table-responsive">

                <thead>

                <th>Dag</th>
                <th>Van</th>
                <th>Tot</th>
                </thead>
                        <?php
                        // begin openingstijden

                        $sqltijden = "SELECT * FROM openingstijden WHERE locatieid=$locatie_id";
                        $resulttijden = mysqli_query($con, $sqltijden);
                        $counttijden = mysqli_num_rows($resulttijden);
                        if ($counttijden > 0);
                        {
                            while ($rowtijden = mysqli_fetch_object($resulttijden))
                            {
                                echo "<tr><td>";
                                echo $rowtijden->dag;
                                echo "</td><td>";
                                echo $rowtijden->vantijd;
                                echo "</td><td>";
                                echo $rowtijden->tottijd;
                                echo "</td><tr>";
                            }
                        }
                        //end openingstijden
                        ?>


            </table>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <table class="table table-responsive">
                <tr>
                    <td>
                        <?php
                        // begin content tekst
                        $sql = "SELECT * FROM locatietext WHERE locatie = $locatie_id";
                        $result = mysqli_query($con, $sql);
                        $count = mysqli_num_rows($result);
                        if ($count > 0)
                        {
                            while ($row = mysqli_fetch_object($result))
                            {
                                echo $row->tekst;
                                echo "<br>";
                            }
                        }
                        // end content tekst
                        ?>
                    </td>
                    </tr>
            </table>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2"></div>
    </div>


