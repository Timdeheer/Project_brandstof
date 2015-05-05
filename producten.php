<?php session_start();
$functie = $_SESSION['functie'];
if($functie > "0")
    include 'headerbeheer.php';

else{
    include 'header.php';
}?>
<html>

<body>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">



                <?php
    $results = $con->query("SELECT * FROM producten  ORDER BY id DESC ");
    if($row = $results->num_rows > 0) {
        while($row = $results->fetch_object()) {
            ?>
        <table class="table table-responsive">
            <tr>

                <?php
                echo "<td><img src='{$row->post_thumbnail}' alt='product_afbeelding' class='img-rounded center-block img-responsive'></td>";

                echo "<h4><tr><td>". $row->productnaam . "</td></h4>";
            echo    " <h3><tr><td> ".$row->beschrijving."</td></tr></h3> ";
             echo   " <h3><tr><td> &euro; ".$row->prijs."</td></tr></h3> ";
            echo "<br>";
        }
    }



    ?>

</table>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>

</body>
</html>

