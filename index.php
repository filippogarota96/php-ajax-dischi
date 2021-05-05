<?php
include  __DIR__ . "/variables.php";
include  __DIR__ . "/partials/functions.php";
include  __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Dischi</title>
</head>

<body>

  <body>
    <div id="app">
      <header>
        <div class="logo-wrapper">
          <img class="logo" src="img/download.png" alt="logo">
        </div>
        <div class="select-wrapper">
          <label for="select-genre">Seleziona un genere: </label>
          <select class="select-genre" name="select-genre">
            <option value="">All</option>
          </select>
        </div>
      </header>
      <main>
        <div class="container">
          <?php foreach ($albums as $album) : ?>
            <div class="cd-container">
              <img src="<?= $album["poster"]; ?>">
              <h3><?= $album["title"]; ?></h3>
              <span><?= $album["author"]; ?></span>
              <span><?= $album["year"]; ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </main>
    </div>
  </body>

</html>