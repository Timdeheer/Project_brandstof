<?php
include '../connectie.php';
include 'headercmsadmin.php';
include 'beheerindex.php';
if ($functie == "1")
    {

      ?>
      <div class="content-display">
      <form action="logo_wijzigen_cn.php" method="post" enctype="multipart/form-data">
        <input type="file" name="post-thumbnail">
        <button type="submit" name="submit">Update</button>
      </form>
    </div>

      <?php


    }
    else {
      ?>
       <script type="text/javascript">
         window.location = "../uitloggen.php"
       </script>
      <?php
    }
 ?>
