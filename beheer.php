<?php
error_reporting(0);
session_start();
$id = $_SESSION["id"];
$locatie = $_SESSION["locatie"];
$naam = $_SESSION["naam"];
$functie = $_SESSION['functie'];

    include 'connectie.php';


if($functie > 0){
    include 'headerbeheer.php';
    include 'beheerindex.php';
?>

    <img src="assets/img/logo-brandstof.png" alt="login_logo" class="img-rounded center-block img-responsive">
    <h3 class="text-success text-center">Welkom <?php echo $naam ?> op het Portaal van Tankstation!</h3>

<?php
}
else{
    header("location:login.html");
}
    ?>
