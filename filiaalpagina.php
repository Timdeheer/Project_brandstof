<?php

session_start();
$id = $_SESSION["id"];
$locatie = $_SESSION["locatie"];
$naam = $_SESSION["naam"];

include 'filiaalpaginaindex.php';
//index





include 'connectie.php';
$sql3 = "SELECT * FROM gebruikers WHERE id = $id";
$result3 = mysqli_query($con, $sql3);
$count3 = mysqli_num_rows($result3);

//if ($count3 > 0) {
//    while ($row3 = mysqli_fetch_object($result3))
//    {
//
//        $locatie = $row3->locatie;
//        echo $locatie;
//
//        $sql4 = "SELECT * FROM locatietext WHERE locatie = $locatie";
//        $result4 = mysqli_query($con, $sql4);
//        $count4 = mysqli_num_rows($result4);
//        if ($count4 > 0)
//        {
//            while ($row4 = mysqli_fetch_object($result4))
//            {
//                echo $row4->tekst;
//            }
//        }
//    }
//}
?>