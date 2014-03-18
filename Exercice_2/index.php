<!doctype html>
<html lang="en">
  <head>
    <title>les tableaux</title>
    <meta charset="utf-8"/>
    <style>
      table {
        border: solid 1px;
        border-radius: 10px 10px 10px 10px;
        width: 100%;
      }
      td {
        border: solid 1px;
      }
    </style>
  </head>

  <body>
    <form method="post" action="index.php">
      <label>Combien voulez-vous de lignes ? :</label>
      <input type="text" name="nb_lignes"/>
      <label>Combien voulez-vous de colonnes ? :</label>
      <input type="text" name="nb_colonnes"/>
      <input type="submit" value="Afficher"/>
    </form>
    <h1>Un tableau</h1>
    <p>
      <br/>
      Chaque cellule du tableau contient le numéro de ligne et de colonne.
    </p>
    <table>
      <?php
        $row = $_POST['nb_lignes'];
        $col = $_POST['nb_colonnes'];

        for ($i =0; $i < $row; $i++) {
          echo "<tr>";
          for ($j =0; $j < $col; $j++) {
            echo "<td>(" . $i . "," . $j . ")</td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
    <p>
      Les chiffres sont maintenant représentés par des images.
      <br/>
      <table>
        <?php
          $row = $_POST['nb_lignes'];
          $col = $_POST['nb_colonnes'];

          for ($i =0; $i < $row; $i++) {
            echo "<tr>";
            for ($j =0; $j < $col; $j++) {
              echo "<td>(<img src='images/abc_" . $i . "redbigw.gif'></img>,<img src='images/abc_". $j . "redbigw.gif'></img>)</td>"; 
            }
            echo "</tr>";
          }
        ?>
      </table>
    </p>
  </body>

</html>