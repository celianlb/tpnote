<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Pokedex</title>
  </head>
  <body>
 <h1>My Pokedex</h1>
    <table>
      <thead>
        <tr>
          <th>Sprite</th>
          <th>ID</th>
          <th>Name</th>
          <th>Height</th>
          <th>Weight</th>
          <th>Base exp</th>
        </tr>
      </thead>
      <tbody>
          
          <?php 
          
          $link = mysqli_connect("localhost", "root", "", "pokedex");
          
          if (!$link) {
              echo "Erreur : Impossible de se connecter à MySQL." .PHP_EOL;
              echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;
              echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL;
              exit;
                  
          }
          
          $result = $link->query("SELECT id,identifier,height,weight, base_experience FROM pokedex");
          
          if($result) {
              while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                  echo $row['identifier'];
              }
          } 
          
          
          
          while ($donnees = $result) {

            echo "<tr>";
              echo "<th>Sprite<th>";
              echo "<th>ID<th>";
              echo "<th>Name<th>";
              echo "<th>Height<th>";
              echo "<th>Weight<th>";
              echo "<th>Base exp<th>";
            echo "</tr>";

            echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['identifier'] . "</td>";
              echo "<td>" . $row['height'] . "</td>";
              echo "<td>" . $row['weight'] . "</td>";
              echo "<td>" . $row['base_experience'] . "</td>";
            echo "</tr>";
         
          }
          
          
          
          
          
          
          ?>
          
          
          
        <tr>
          <td><img src="sprites/bulbasaur.png" alt="bulbasaur"></td>
          <td>1</td>
          <td>bulbasaur</td>
          <td>7</td>
          <td>69</td>
          <td>64</td>
        </tr>
        <tr>
          <td><img src="sprites/ivysaur.png" alt="bulbasaur"></td>
          <td>2</td>
          <td>ivysaur</td>
          <td>10</td>
          <td>130</td>
          <td>1</td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
