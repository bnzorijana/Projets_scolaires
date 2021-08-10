<?php
  function afficher_tableau($reponse, $class="tab_sql", $width="100%") {
    $ncol = $reponse->columnCount();
    echo "<table class=$class style='width: $width;'>" . "</br>";
    echo "<thead>";
    echo " <tr>";
    for ($i = 0; $i < $ncol; $i++) {
      $col = $reponse->getColumnMeta($i);
      echo "<th>" . $col['name'] . "</th>";
    }
    echo " </tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($reponse as $row) {
      echo "<tr>";
      foreach ($row as $elmt) {
        echo "<td>" . $elmt . "</td>";
      }
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  }
?>
