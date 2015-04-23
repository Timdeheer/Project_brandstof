<?php
include 'connectie.php';

$productnaam = $_POST['productnaam'];
$prijs = $_POST['prijs'];
$beschrijving = $_POST['beschrijving'];

mysqli_select_db($con,"brandstof");
$productnaam = mysqli_real_escape_string($con, $productnaam);
$beschrijving = mysqli_real_escape_string($con, $beschrijving);
$prijs = mysqli_real_escape_string($con, $prijs);

$locatie = 2;

$imgName      = $con->real_escape_string($_FILES['post-thumbnail']['name']);
$imgData      = $_FILES["post-thumbnail"]["tmp_name"];
$imgType      = $con->real_escape_string($_FILES["post-thumbnail"]["type"]);
$targetFolder = "assets/uploaded_images/";
$imageUrl     = "assets/uploaded_images/".$imgName;

print_r($_FILES['post-thumbnail']);

if ( isset($_POST['submit']) ) {

    $query = mysqli_query($con,"INSERT INTO aanbiedingen (productnaam,post_thumbnail,beschrijving,prijs)
        VALUES ('$productnaam','$imageUrl','$beschrijving','$prijs')") or die(mysqli_error($con));

    move_uploaded_file($imgData, "$targetFolder" . $imgName);
    header("location:product_toevoegen.php");


}
?>
