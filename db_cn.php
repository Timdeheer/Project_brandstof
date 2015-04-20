<?php
        session_start();

        include 'connectie.php';

        $myusername = mysqli_real_escape_string($con, $_POST['gebruikersnaam']);
        $mypassword = mysqli_real_escape_string($con, $_POST['wachtwoord']);

        $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam='$myusername'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_object($result);
        $count = mysqli_num_rows($result);
        if ($count > 0) {
            $hashed_pw = $row->wachtwoord;
            if (password_verify($mypassword, $hashed_pw)) {

                $_SESSION["gebruikersnaam"] = $row->gebruikersnaam;
                $_SESSION["id"] = $row->id;
                $_SESSION["naam"] = $row->naam;
                $_SESSION["functie"] = $row->functie;
                $_SESSION["rol"] = $row->rol;
                $_SESSION["locatie"] = $row->locatie;
                ob_start();
                header("location:beheer.php");
            }else {
                echo "connection has failed";
            }
        }
        ?>
