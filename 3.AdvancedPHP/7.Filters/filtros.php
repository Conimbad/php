<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filtros en PHP</title>
</head>
<body>
  <table>
    <tr>
      <td>Nombre de filtro</td>
      <td>ID del filtro</td>
    </tr>
    <?php
    foreach (filter_list() as $id => $filtro) {
      echo '<tr><td>' . $filtro . '</td><td>' . filter_id($filtro) . '</td><tr>';
    }
    ?>
  </table>
</body>
</html>