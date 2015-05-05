<?php
include 'connectie.php';

$locatie = 2;

$imgName      = $con->real_escape_string($_FILES['post-thumbnail']['name']);
$imgData      = $_FILES["post-thumbnail"]["tmp_name"];
$imgType      = $con->real_escape_string($_FILES["post-thumbnail"]["type"]);
$targetFolder = "assets/uploaded_images/";
$imageUrl     = "assets/uploaded_images/".$imgName;

print_r($_FILES['post-thumbnail']);

if ( isset($_POST['submit']) ) {
    if ($insert = $con->query("INSERT INTO banners (post_thumbnail) VALUES ('$imageUrl')")) {
        move_uploaded_file($imgData, "$targetFolder" . $imgName);
        header("location:logo_wijzigen.php");
        ?>
<!--        <script type="text/javascript">-->
<!--<!---->
<!--window.location = "logo_wijzigen.php"-->
<!--//-->
<!--</script>-->
        <?php
    }
}
?>
