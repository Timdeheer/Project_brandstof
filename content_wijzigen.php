<?php
include 'connectie.php';
include 'headerbeheer.php';
include 'beheerindex.php';

      $result = mysqli_query($con, "SELECT * FROM locaties");
      echo "<div class='content-display'>";

      echo "<table class='table table-striped table-hover'>";


      while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";

          echo "<label for='locatie'></label>";

          echo "<td>";
          echo $row["naam"];

          echo "</td>";
          echo "<td>";
          echo "<form action='#' method='post'>";
          echo "<button type='submit' name='locatie_keuze' value={$row['id']}>Wijzigen</button>";
          echo"</form>";
          echo "<td>";
          echo "</tr>";
      }

      echo "</tabel>";
      echo "</div>";

      if (isset($_POST['locatie_keuze'])) {
          $id = $_POST['locatie_keuze'];
          $result2 = mysqli_query($con, "SELECT * FROM locatietext WHERE locatie='$id'");
          echo "<table class='table table-striped table-hover'>";
          while ($row2 = mysqli_fetch_array($result2))
          {
          ?>
          <form action="#" method="post">
              <div class="form-group">

        <div class="col-sm-10">
          <textarea class="form-control" rows="3" id="textArea" name="tekst"><?php echo $row2['tekst'] ?></textarea>
        </div>
        <label for="textArea" class="col-sm-2 control-label"><?php echo "<button type='submit' name='update_content' value={$row2['id']}>Wijzigen</button>"; ?></label>
      </div>
          <?php
          }
          echo "</table>";
          }

          if (isset($_POST['update_content'])) {
              $id = $_POST['update_content'];
              $tekst = $_POST['tekst'];
              $query = "UPDATE locatietext SET tekst='$tekst' WHERE id='$id'";
              if (mysqli_query($con, $query)) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . mysqli_error($con);
              }

            }



