<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style/css/style.css">
    <title>Lotofácil</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Início</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="navbar-text mx-auto text-center">Sorteador de números</span>
    </div>
  </nav>
  <?php 
    $min = 1;
    $max = 25;
    $num_sorteados = [];

    while (count($num_sorteados) < 15) {
      $num = mt_rand($min, $max);
      if (!in_array($num, $num_sorteados)) {
        $num_sorteados[] = $num;
      }
    }

    sort($num_sorteados);

    echo "<ol>Números sorteados: </ol>";
    foreach ($num_sorteados as $num) {
        echo $num . " ";
    }
  ?>

