<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/js/bootstrap.js"></script>


    <title>Login</title>
</head>

<body>
<?php
session_start();
$functie = $_SESSION['functie'];
if($functie > "0")
    include 'headerbeheer.php';

else{
    include 'header.php';
}
?>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">


            <img src="assets/img/texaco_petroleos.png" alt="login_logo" class="img-rounded center-block img-responsive">
        <h3 class="text-danger text-center"text-danger style="color:red">Welkom <?php echo $naam ?> op het Portaal van Tankstation!</h3>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>

</div>



</div>

<footer>

</footer>
</body>
</html>
