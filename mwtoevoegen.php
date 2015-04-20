<?php
session_start();
$locatie = $_SESSION["locatie"];
?>

<a href="filiaalpagina.php">terug naar menu</a>
<h1>Medewerker toevoegen</h1>
<form action="mwtoevoegen_cn.php" method="post">
   
    <table>
        <tr>
            <td>
                Gebruikersnaam:
            </td>
            <td>	
                <input type="text" name="gebruikersnaam" id="gebruikersnaam">
            </td>
        </tr>
        <tr>
            <td>
                wachtwoord:
            </td>
            <td>
                <input type="text" name="wachtwoord" id="wachtwoord">
            </td>
        </tr>
        <tr>
            <td>
                naam:
            </td>
            <td>
                <input type="text" name="naam" id="naam">
            </td>
        </tr>
        <tr>
            <td>
                achternaam:
            </td>
            <td>
                <input type="text" name="achternaam" id="achternaam">
            </td>
        </tr>
        <tr>
            <td>
                rol
            </td>
            <td>



                <?php
                include 'connectie.php';
                $sql = "SELECT * FROM rolmedewerker WHERE naam NOT LIKE 'filiaal-manager'";
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                     ?><select name="rol" id="rol">
                         <?php
                    while ($row = mysqli_fetch_object($result)) { ?>
               
                    <option value="<?php echo $row->id;  ?>"><?php echo $row->naam;  ?></option>
                
                        <?php
                    }
                    echo "</select>";
                }
                ?>
                
            </td>
        </tr>
        <tr>
            <td>
                locatie
            </td>
            <td>



                <?php
                include 'connectie.php';
                $sql = "SELECT * FROM locaties WHERE id = '$locatie'";
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {
                     ?><select name="locatie" id="locatie">
                         <?php
                    while ($row = mysqli_fetch_object($result)) { ?>
               
                    <option value="<?php echo $row->id;  ?>"><?php echo $row->naam;  ?></option>
                
                        <?php
                    }
                    echo "</select>";
                }
                ?>
                
            </td>
            
        </tr>

        <tr>
            <td>	
            </td>
            <td>
                <input type="submit" value="aanmaken">
            </td>
        </tr>
        
        
    </table>
    
    

