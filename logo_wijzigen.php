<?php
include 'connectie.php';
include 'headerbeheer.php';
include 'beheerindex.php';

?>
      <div class="content-display">
      <form action="logo_wijzigen_cn.php" method="post" enctype="multipart/form-data">
        <input type="file" name="post-thumbnail">
        <button type="submit" name="submit">Update</button>
      </form>
    </div>

