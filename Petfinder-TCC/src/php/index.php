<?php
include("./connection.php");
include("./save.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <form enctype="multipart/form-data" action="" method="POST">
    <label>Nome do Pet</label>
    <input type="text" name="animal-name">
    <label>Cor do Animal</label>
    <input type="text" name="animal-color">
    <select>
      <option>Cachorro</option>
      <option>Gato</option>
    </select>
    <hr />
    <label>Selecione o Arquivo</label><br />
    <input type="file" name="arquivo"><br />
    <button name="upload" type="submit">Enviar Arquivo</button>
  </form>

  <div id="app">

    <?php
    while ($arquivo = $sql_query->fetch_assoc()) {
    ?>
      <div class="card-box">
        <div class="card">
          <img width="500px" height="500px" src="<?php echo $arquivo['path']; ?>" alt="">
          <h2><?php echo $animalName ?></h2>
          <p><?php echo $animalColor ?></p>
        </div>
        <div class="card">
          <img width="500px" height="500px" src="<?php echo $arquivo['path']; ?>" alt="">
          <h2><?php echo $animalName ?></h2>
          <p><?php echo $animalColor ?></p>
        </div>
        <div class="card">
          <img width="500px" height="500px" src="<?php echo $arquivo['path']; ?>" alt="">
          <h2><?php echo $animalName ?></h2>
          <p><?php echo $animalColor ?></p>
        </div>
        <div class="card">
          <img width="500px" height="500px" src="<?php echo $arquivo['path']; ?>" alt="">
          <h2><?php echo $animalName ?></h2>
          <p><?php echo $animalColor ?></p>
        </div>
      </div>

    <?php
    }
    ?>
  </div>
</body>

</html>