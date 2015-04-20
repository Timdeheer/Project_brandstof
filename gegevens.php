<?php
session_start();

echo $_SESSION["gebruikersnaam"];
echo "<br>";
echo $_SESSION["naam"];

header( "Refresh:3; url=beheer.php", true, 303);
?>