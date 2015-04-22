<?php
session_start();
$naam = $_SESSION['naam'];
?>


<div class="navigatie-navbar">
  <ul class="nav nav-pills nav-stacked">
      <img src="assets/img/logo-brandstof.png" alt="login_logo" class="img-rounded center-block img-responsive">
<!--    <legend class="text-center">--><?php // echo "Welkom ". $naam ."<br>" ;?><!--</legend>-->

    <li><a href="registratie.php">Account aanmaken</a></li>
    <li><a href="account_wijzigen.php">Account wijzigen</a></li>
    <li><a href="content_wijzigen.php">Content wijzigen</a></li>
    <li><a href="tijden_wijzigen.php">Tijden wijzigen</a></li>
    <li><a href="logo_wijzigen.php">Logo wijzigen</a></li>
    <a href="uitloggen.php" class="btn btn-primary full-width">Uitloggen</a>

  </ul>
</div>
