<?php
include 'connectie.php';
include 'headercmsadmin.php';
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
          $result2 = mysqli_query($con, "SELECT * FROM openingstijden WHERE locatieid='$id'");
          echo "<table class='table table-striped table-hover'>";
          while ($row2 = mysqli_fetch_array($result2))
          {

            ?>
            <form action='#' method='post'>
                <tr>
                    <th>
                        Dag:
                    </th>
                    <th>
                        <?php echo $row2['dag'] ?>
                        <?php echo $row2['id'] ?>
                    </th>
                </tr>

                <tr>
                    <td>
                        van:
                    </td>
                    <td>
                        <input type="text" name="vantijd" id="vantijd" value="<?php echo $row2['vantijd'] ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        tot:
                    </td>
                    <td>
                        <input type="text" name="tottijd" id="tottijd" value="<?php echo $row2['tottijd'] ?>">
                    </td>
                </tr>


                <tr>
                    <td>

                        <?php echo "<button type='submit' name='update_prijzen' value={$row2['id']}>Wijzigen</button>"; ?>
                    </td>
                    <td>

                    </td>
                </tr>
              </form>

            <?php


          }
          echo "</table>";




          }

          if (isset($_POST['update_prijzen'])) {
              $id2 = $_POST['update_prijzen'];
              $van_tijd = $_POST['vantijd'];
              $tot_tijd = $_POST['tottijd'];


              $query2 = "UPDATE openingstijden SET vantijd='$van_tijd', tottijd='$tot_tijd' WHERE id='$id2'";

              if (mysqli_query($con, $query2)) {
                echo "Record updated successfully";
              } else {
                echo "Error updating record: " . mysqli_error($con);
              }
              ?>

               <script type="text/javascript">
                 window.location = "tijden_wijzigen.php"
               </script>
              <?php


            }



