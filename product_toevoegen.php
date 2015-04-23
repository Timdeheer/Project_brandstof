<?php include 'headerbeheer.php'; ?>
<html>

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
<body>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
    <div class="col-lg-4 col-md-4 col-sm-4">

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <table class="table table-responsive">
                    <tr><td><input id="uploadFile"  onchange="pressed()"  placeholder="Kies bestand" disabled="disabled">
                            </td><td><div class="fileUpload btn btn-success">
                                <span>Upload</span>
                                <input type="file" class="upload" id="post_thumbnail" name="post-thumbnail">

                            </div></td></tr>
                    <tr><td><input type="text" class="form-control" id="productnaam" name="productnaam"></td><td>Product naam</td></tr>
                    <tr><td><input type="text" class="form-control" id="beschrijving" name="beschrijving"></td><td>Beschrijving</td></tr>
                    <tr><td><input type="text" class="form-control" id="prijs" name="prijs"></td><td>Prijs</td></tr>





                    <br>
                    <br>
                </table>
                <button type="submit" class='btn btn-success form-control' name="submit">Update</button>
            </div>
        </form>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-4"></div>
</div>

</body>
</html>
<script>
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };

</script>
