<?php
include 'connectie.php';
include 'header.php';
$locatie = 2;

$imgName      = $con->real_escape_string($_FILES['post-thumbnail']['name']);
$imgData      = $_FILES["post-thumbnail"]["tmp_name"];
$imgType      = $con->real_escape_string($_FILES["post-thumbnail"]["type"]);
$targetFolder = "../image/";
$imageUrl     = "http://sites.local/school/brandstof/image/".$imgName;

print_r($_FILES['post-thumbnail']);

if ( isset($_POST['submit']) ) {
    if ($insert = $con->query("INSERT INTO banners (post_thumbnail) VALUES ('$imageUrl')")) {
        move_uploaded_file($imgData, "$targetFolder" . $imgName);
        ?>
        <script type="text/javascript">
<!--
window.location = "logo_wijzigen.php"
//-->
</script>
        <?php
    }
}
?>
