<<<<<<< HEAD
=======

>>>>>>> origin/master
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Brandstof prijzen aanpassen</title>
</head>

<body>
<table class="recente_prijzen">
<thead>
<tr><td>Recente prijzen</td></tr>
</thead>
<tbody>
<<<<<<< HEAD
<tr><td>
=======
<tr><td></td></tr></tbody></table>
>>>>>>> origin/master
<?php
include 'connectie.php';
$locatie_id = '2';
$results = $con->query("SELECT * FROM fuel WHERE brandstof='DIESEL' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>

<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='EURO95' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>
<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='LPG' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>
</tbody>
</table>
<h1>Brandstof prijzen aanpassen</h1>
<form action="" method="post">
<table>

                    <tr>Brandstof:
                    <select name="brandstof">
                    <option value="">Selecteer...</option>
                    <option value="euro95">EURO 95</option>
                    <option value="diesel">Diesel</option>
                    <option value="lpg">LPG</option>
                    </select>
                    </tr>
<tr><td>Prijs:</td><td></td><td><input style="<?php echo '' ?>" type="text" name="prijzen"></td></tr>


</table>
<input type="submit" name="submit" value="verzenden" >
<?php
if(isset($_POST['submit'])){
    header("Location: brandstof_prijzen.php");
    exit;
}
?>

</form>



</body>
</html>




<?php
// error_reporting(0);


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
	}else{
		echo mysqli_error($con);
	}
	}



?>
<<<<<<< HEAD
=======
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
</body>
</html>
>>>>>>> origin/master
