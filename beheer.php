<?php
include '../connectie.php';
include 'headercmsadmin.php';
include 'beheerindex.php';
if ($functie == "1")
    {

    }
    else {
      ?>
      <script type="text/javascript">
        window.location = "../uitloggen.php"
      </script>
      <?php
    }
