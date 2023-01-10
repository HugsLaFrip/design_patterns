<?php
require 'src/IceCream.php';

$iceCream = new IceCream();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ice cream</title>
</head>

<body>
  <h2>Composez votre glâce</h2>
  <form action="src/handle-icecream.php" method="post">
    <select name="type" id="type">
      <option value="">-- Choisissez un type --</option>
      <?php foreach ($iceCream->getAvailableType() as $key => $value) : ?>
        <option value="<?= $key ?>"><?= $key ?></option>
      <?php endforeach ?>
    </select>
    <select name="parfume" id="parfume">
      <option value="">-- Choisissez un parfum --</option>
      <?php foreach ($iceCream->getAvailableParfume() as $key => $value) : ?>
        <option value="<?= $key ?>"><?= $key ?></option>
      <?php endforeach ?>
    </select>
    <select name="numberOfBalls" id="numberOfBalls">
      <option value="">-- Choisissez un nombre de boule --</option>
      <?php foreach ($iceCream->getAvailableBalls() as $key => $value) : ?>
        <option value="<?= $key ?>"><?= $key ?></option>
      <?php endforeach ?>
    </select>
    <select name="extra" id="extra">
      <option value="">-- Envie d'un extra ? --</option>
      <?php foreach ($iceCream->getAvailableParfume() as $key => $value) : ?>
        <option value="<?= $key ?>"><?= $key ?></option>
      <?php endforeach ?>
    </select>
    <button type="submit">Voir le prix</button>
  </form>
</body>

</html>