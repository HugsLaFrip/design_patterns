<?php

require 'IceCream.php';

$iceCream = new IceCream();

$iceCream->setType($_POST['type']);
$iceCream->setParfume($_POST['parfume']);
$iceCream->setNumberOfBalls($_POST['numberOfBalls']);
$iceCream->setExtra($_POST['extra']);

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
  <h2>Prix de votre glâce</h2>
  <table>
    <tbody>
      <tr>
        <td>Type</td>
        <td><?= $iceCream->getType() ?></td>
        <td><?= $iceCream->getTypePrice() / 100 ?> €</td>
      </tr>
      <tr>
        <td>Parfum</td>
        <td><?= $iceCream->getParfume() ?></td>
        <td>0 €</td>
      </tr>
      <tr>
        <td>Nombre de boule</td>
        <td><?= $iceCream->getNumberOfBalls() ?></td>
        <td><?= $iceCream->getBallsPrice() / 100 ?> €</td>
      </tr>
      <tr>
        <td>Extra</td>
        <td><?= $iceCream->getExtra() ?></td>
        <td><?= $iceCream->getExtraPrice() / 100 ?> €</td>
      </tr>
      <tr>
        <td>Total</td>
        <td></td>
        <td><?= $iceCream->getTotalPrice() / 100 ?> €</td>
      </tr>
    </tbody>
  </table>
</body>

</html>