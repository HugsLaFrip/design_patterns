<?php
require './libraries/ReadIterator.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iterator</title>
</head>

<body>
  <h1>Voici les différentes relations de nos personnages :</h1>
  <ul>
    <?php foreach ((new ReadIterator())->getIterator() as $person) : ?>
      <li><?= $person->getName() ?> : </li>
      <ul>
        <?php foreach ($person->getRelations() as $personRelated) : ?>
          <li><?= $personRelated->getName() ?></li>
        <?php endforeach ?>
      </ul>
    <?php endforeach ?>
  </ul>
</body>

</html>