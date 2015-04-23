
<?php
include 'connectie.php';
include 'header.php';
session_start();
?>
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Brandstof prijzen aanpassen</title>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
        <div class="col-lg-4 col-md-4 col-sm-4">

            <?php $sqli = "SELECT post_thumbnail from banners ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($con,$sqli);
            while ($row = $result->fetch_assoc()) {

                echo "<img src='assets/img/logo-brandstof.png' alt='index_logo' class='img-rounded center-block img-responsive'>";

            }?>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4"></div>
    </div>
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-4 col-md-4 col-sm-4">


    <!--recent start-->
    <p>Recente prijzen</p>
    <table class="table table-responsive">
        <tr>
            <div class="form-group">
                <?php
                $locatie = $_SESSION['locatie'];
                $locatie_id = '2';
                $results = $con->query("SELECT * FROM fuel WHERE brandstof='DIESEL' ORDER BY datum DESC LIMIT 1");
                if($row = $results->num_rows > 0) {
                    while($row = $results->fetch_object()) {
                        echo "<h4><td>". $row->brandstof. "</td></h4>" ." <h3><td> &euro; ".$row->prijzen."</td></h3> ";
                    }
                }
                ?>
            </div>
        </tr>
        <tr>
            <div class="form-group">
                <?php
                $results = $con->query("SELECT * FROM fuel WHERE brandstof='EURO95' ORDER BY datum DESC LIMIT 1");
                if($row = $results->num_rows > 0) {
                    while($row = $results->fetch_object()) {
                        echo "<h4><td>". $row->brandstof. "</td></h4>" ." <h3><td> &euro; ".$row->prijzen."</td></h3> ";
                    }
                }
                ?>
            </div>
        </tr>
        <tr>
            <div class="form-group">
                <?php
                $results = $con->query("SELECT * FROM fuel WHERE brandstof='LPG' ORDER BY datum DESC LIMIT 1");
                if($row = $results->num_rows > 0) {
                    while($row = $results->fetch_object()) {
                        echo "<h4><td>". $row->brandstof. "</td></h4>" ." <h3><td> &euro; ".$row->prijzen."</td></h3> ";
                    }
                }
                ?>
            </div>
        </tr>


    </table>




    <!--recent stop-->

</div>
<div class="col-lg-4 col-md-4 col-sm-4">




    <!--aanpassen start-->
    <p>Brandstof prijzen aanpassen</p>
    <form action="" method="post">




                    <div class="form-group">
                        <select  class="form-control" name="brandstof">
                    <option value="">Brandstof type</option>
                    <option value="euro95">EURO 95</option>
                    <option value="diesel">Diesel</option>
                    <option value="lpg">LPG</option>
                        </select>
                        </div>


                <div class="form-group">


                    <input class="form-control" type="text" placeholder="Vul hier uw gewenste prijs in." name="prijzen">
                    </div>


        <div class="form-group">
        <input type="submit" class="btn btn-success btn-xs form-control" name="submit" value="verzenden" >
            </div>


    </form>



</body>
</html>




<?php
//error_reporting(0);

if (isset($_POST['submit'])) {
    $brandstof = $_POST['brandstof'];
    $prijzen = $_POST['prijzen'];





    $brandstof = mysqli_real_escape_string($con, $brandstof);
    $prijzen = mysqli_real_escape_string($con, $prijzen);




    $query = "INSERT INTO fuel (locatie_id, brandstof, prijzen, datum)
	VALUES ('$locatie_id', '$brandstof', '$prijzen', CURRENT_TIMESTAMP )";
//    $query_update_prijzen = "UPDATE `fuel` SET ($locatieid = `locatie_id`, $brandstof = `brandstof`, $prijzen = `prijzen`) WHERE            $locatieid =`locatie_id`  ";

    if(mysqli_query($con, $query)){
        echo 'De Brandstofprijzen zijn up to date!';
        header("location:brandstof_prijzen.php");
    }else{
        echo mysqli_error($con);
    }
}



?>

<!--aanpassen stop-->





</div>
<div class="col-lg-2 col-md-2 col-sm-2"></div>
</div>
</div>

</body>
</html>

