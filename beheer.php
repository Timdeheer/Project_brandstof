<?php
session_start();
$username = $_SESSION["gebruikersnaam"];
$id = $_SESSION["id"];
$naam = $_SESSION["naam"];
$functie = $_SESSION["functie"];
$rol = $_SESSION["rol"];
$locatie = $_SESSION["locatie"];
print_r($username);



if ($functie == "1") {
    ?>
    U mag veilig op de website deelnemen <br>

    <a href='registratie.php'>account aanmaken </a><br>
    <a href='account_wijzigen.php'>account wijzigen</a><br>
    <br>
    <form action="#" method="post">
        <button type='submit' name='uitloggen'>uitloggen</button>

<?php
        if (isset($_POST['uitloggen'])) {


            ?>
            <script type="text/javascript">
<!--
window.location = "uitloggen.php"
//-->
</script>
            <?php
        }
    }
    else if ($rol == "1") {
      ?>
      <script type="text/javascript">
<!--
window.location = "filiaalpagina.php"
//-->
</script>
      <?php

    }


    else
    {
        header("location:login.html");
    }
    ?>
