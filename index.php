<?php
$locatie_id='2';

include 'connectie.php';

//logo ophalen

$sqli = "SELECT post_thumbnail from banners ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con,$sqli);
while ($row = $result->fetch_assoc()) {

    echo "<img src='{$row['post_thumbnail']}' alt='index_logo' class='img-rounded center-block img-responsive'>";

}



// begin content tekst
$sql = "SELECT * FROM locatietext WHERE locatie = $locatie_id";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if ($count > 0)
{
    while ($row = mysqli_fetch_object($result))
    {
        echo $row->tekst;
        echo "<br>";
    }
}
// end content tekst

// begin openingstijden
$sqltijden = "SELECT * FROM openingstijden WHERE locatieid=$locatie_id";
$resulttijden = mysqli_query($con, $sqltijden);
$counttijden = mysqli_num_rows($resulttijden);
if ($counttijden > 0);
{
  while ($rowtijden = mysqli_fetch_object($resulttijden))
  {
    echo $rowtijden->dag;
    echo "/";
    echo $rowtijden->vantijd;
    echo "-";
    echo $rowtijden->tottijd;
    echo "<br>";
  }
}
//end openingstijden

//begin prijzen
?>
<table class="recente_prijzen">
<thead>
<tr><td>Recente prijzen</td></tr>
</thead>
<tbody>
<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='DIESEL' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>

<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='EURO95' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>
<tr><td>
<?php
$results = $con->query("SELECT * FROM fuel WHERE brandstof='LPG' AND locatie_id='$locatie_id' ORDER BY datum DESC LIMIT 1");
if($row = $results->num_rows > 0) {
    while($row = $results->fetch_object()) {
      echo $row->brandstof." ".$row->prijzen." ";
    }
}
?>
</td></tr>
</tbody>
</table>

<!-- end prijzen -->
