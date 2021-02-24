<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<!-- PHP -->
<?php $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' ?>
<?php $parola = $_GET['badword']; ?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Badword</title>
</head>
<body>

  <p><strong>PARAGRAFO:</strong> <?php echo $testo; ?></p>

  <div><strong>LUNGHEZZA DEL TESTO:</strong> <?php echo strlen($testo); ?></div>

  <div><?php echo $parola; ?>
    <?php $nuovaParola = str_replace($parola, "***", $testo) ?>
  </div>

</body>
</html>
