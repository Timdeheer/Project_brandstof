<?php
include 'connectie.php';
session_start();
$functie = $_SESSION['functie'];
if($functie > "0")
    include 'headerbeheer.php';

else{
    include 'header.php';
}
include 'beheerindex.php';

?>

<style>
    .fileUpload {
        position: relative;
        overflow: hidden;
        margin: 10px;
    }
    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
</style>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="content-display">
            <form action="logo_wijzigen_cn.php" method="post" enctype="multipart/form-data">

                <input id="uploadFile"  onchange="pressed()"  placeholder="Kies bestand" disabled="disabled">
                <div class="fileUpload btn btn-danger">
                    <span>Upload</span>
                    <input type="file" class="upload" name="post-thumbnail">

                </div>

                <br>
                <br>
                <button type="submit" class='btn btn-danger' name="submit">Update</button>

            </form>
        </div>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>
     <script>
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };

</script>
