<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .error {
      color: red;
    }
  </style>
  <title>Formulario</title>
</head>
<body>
  <?php
    //Define variables y establece valores vacios
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (empty($_POST['name'])) {
        $nameErr = "El nombre es requerido";
      } else {
        $name = test_input($_POST['name']);
        //Verifica si el nombre contiene solo letras y espacios
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
          $nameErr = "Solo se permiten letas y espacios";
        }
      }

      if (empty($_POST['email'])) {
        $emailErr = "El email es requerido";
      } else {
        $email = test_input($_POST['email']);
        // Verifica si e-mail esta bien escrito 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Formato de email no válido";
        }
      }
      
      if (empty($_POST['website'])) {
        $website = "";
      } else {
        $website = test_input($_POST['website']);
        // Verifica si el URL es válido (esta ExReg también permite guiones en la URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
          $websiteErr = "URL inválido";
        }
      }

      if (empty($_POST['comment'])) {
        $comment = "";
      } else {
        $comment = test_input($_POST['comment']);
      }

      if (empty($_POST['gender'])) {
        $genderErr = "El género es requerido";
      } else {
        $gender = test_input($_POST['gender']);
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
  <h2>Ejemplo de Validación de Formulario PHP</h2>
  <p><span class="error">* Campo requerido</span></p>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    Nombre: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">*<?php echo $nameErr;?></span> 
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">*<?php echo $emailErr;?></span>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comentario: <textarea name="comment" cols="40" rows="5"><?php echo $comment;?></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" 
    <?php if (isset($gender) && $gender == "femenino") echo "checked";?>
    value="femenino">Femenino
    <input type="radio" name="gender" 
    <?php if (isset($gender) && $gender == "masculino") echo "checked";?>
    value="masculino">Masculino
    <input type="radio" name="gender" 
    <?php if (isset($gender) && $gender == "otro") echo "checked";?>
    value="otro">Otro
    <span class="error">*<?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">

  </form>
  <?php
    echo "<h2>Salida</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
  ?>
</body>
</html>