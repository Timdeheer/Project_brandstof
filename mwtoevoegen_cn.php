<?php
  $con = mysqli_connect("localhost","root","");

  if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
  }

  mysqli_select_db($con,"brandstof");

  $gebruikersnaam = $_POST['gebruikersnaam'];
  $wachtwoord = $_POST['wachtwoord'];
  $naam = $_POST['naam'];
  $achternaam = $_POST['achternaam'];
  $rol = $_POST['rol'];
  $locatie = $_POST['locatie'];

  $gebruikersnaam = mysqli_real_escape_string($con, $gebruikersnaam);
  $wachtwoord = mysqli_real_escape_string($con, $wachtwoord);
  $naam = mysqli_real_escape_string($con, $naam);
  $achternaam = mysqli_real_escape_string($con, $achternaam);
  $rol = mysqli_real_escape_string($con, $rol);
  $locatie = mysqli_real_escape_string($con, $locatie);

  
  $wachtwoord = password_hash($wachtwoord, PASSWORD_BCRYPT);

  $query = mysqli_query($con, "INSERT INTO gebruikers (gebruikersnaam, wachtwoord, naam, achternaam, rol, locatie) 
    VALUES ('$gebruikersnaam', '$wachtwoord', '$naam', '$achternaam', '$rol', '$locatie')") or die(mysqli_error($con));

  echo "<h2>gebruiker is toegevoegd</h2>"; 
header( "Refresh:1; url=mwtoevoegen.php", true, 303);
  ?>

