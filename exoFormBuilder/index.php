<?php
require './src/forms/LoginForm.php';

$form = new LoginForm();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FormBuilder</title>
  <link rel="stylesheet" href="styles.css">
  <script src="index.js"></script>
</head>

<body>
  <h1>Se connecter</h1>
  <?= $form->generate() ?>
</body>

</html>