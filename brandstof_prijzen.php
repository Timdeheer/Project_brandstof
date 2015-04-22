<?php
Session_start();
include 'header.php';
$username = $_SESSION["gebruikersnaam"];
$id = $_SESSION["id"];
$naam = $_SESSION["naam"];
$functie = $_SESSION["functie"];
$locatie = $_SESSION["locatie"];
$rol = $_SESSION["rol"];
?>
<div class="row">
    <div class="col-lg-2 col-md-2 col-sm-2">LINKS</div>
    <div class="col-lg-4 col-md-4 col-sm-4">



<form class="form-horizontal" action="" method="post">
<table>
    <div class="form-group">
    <h1>Brandstof prijzen aanpassen</h1>

                    <tr>
                    <select class="form-control" name="brandstof">
                    <option value="">Brandstof type</option>
                    <option value="euro95">EURO 95</option>
                    <option value="diesel">Diesel</option>
                    <option value="lpg">LPG</option>
                    </select>
                    </tr>
                </br>
<tr><input placeholder="Voer hier de nieuwe prijs in.." class="form-control" style="<?php echo '' ?>" type="text" name="prijzen"></td></tr>


</table>
</br>
<input class="btn btn-success" type="submit" name="submit" value="verzenden" >
<?php
if(isset($_POST['submit'])){
    // MySQL stuff goes here
    ?>
    <script type="text/javascript">
<!--
window.location = "brandstof_prijzen.php"
//-->
</script>
    <?php

}
?>
</div>
</form>








<?php
// error_reporting(0);


if (isset($_POST['submit'])) {
	$brandstof = $_POST['brandstof'];
    $prijzen = $_POST['prijzen'];





	$brandstof = mysqli_real_escape_string($con, $brandstof);
    $prijzen = mysqli_real_escape_string($con, $prijzen);




	$query = "INSERT INTO `fuel` (`locatie_id`, `brandstof`, `prijzen`, `datum`)
	VALUES ('$locatie_id', '$brandstof', '$prijzen', CURRENT_TIMESTAMP )";
//    $query_update_prijzen = "UPDATE `fuel` SET ($locatieid = `locatie_id`, $brandstof = `brandstof`, $prijzen = `prijzen`) WHERE            $locatieid =`locatie_id`  ";

	if(mysqli_query($con, $query)){
		echo 'De Brandstofprijzen zijn up to date!';
	}else{
		echo mysqli_error($con);
	}
	}



?>
</div>




    <div class="col-lg-4 col-md-2 col-sm-4">
<table class="recente_prijzen">
<thead>
<tr><td>Recente prijzen</td></tr>
</thead>
<tbody>
<tr><td>
<?php
include 'connectie.php';
$locatie_id = $locatie;
$results = $con->query("SELECT * FROM fuel WHERE brandstof='DIESEL' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>

<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='EURO95' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>
<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='LPG' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>
</tbody>
</table>
</div>
<div class="col-lg-2" col-md-2 col-sm-2>RECHTS</div>




</div>
