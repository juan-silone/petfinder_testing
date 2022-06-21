<?php
include("connection.php");

if (isset($_POST['upload'])) {
  $animalName = $_POST['animal-name'];
  $animalColor = $_POST['animal-color'];

  $mysqli->query("INSERT INTO products (cordoanimal, nomedoanimal) VALUES('$animalColor', '$animalName')");
}

if (isset($_FILES['arquivo'])) {
  $arquivo = $_FILES['arquivo'];
  if ($arquivo['error']) {
    die("Falha ao enviar arquivo!!");
  }

  if ($arquivo['size'] > 2000 * 1024 * 1024) {
    die("Arquivo muito grande !! Max: 2MB0");
  }

  $pasta = "arquivo/";
  $nomeDoArquivo = $arquivo['name'];
  $novoNomeDoArquivo = uniqid();
  $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

  if ($extensao != 'jpg' && $extensao != 'png') {
    die("Tipo de arquivo não aceito.");
  }

  $path = $pasta . $novoNomeDoArquivo . "." . $extensao;

  $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
  if ($deu_certo) {
    $mysqli->query("INSERT INTO products (nome, path) VALUES('$nomeDoArquivo', '$path')");
    echo "<p>Arquivo enviado com sucesso! Para acessa-lo, clique aqui: <a href=\"arquivo/$novoNomeDoArquivo.$extensao\">Clique Aqui</a></p>";
  } else
    echo "<p>Falha ao enviar Arquivo</p>";
}

$sql_query = $mysqli->query("SELECT * FROM products");
