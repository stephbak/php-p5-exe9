<?php
$department = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60'=> 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie5</title>
</head>
<body>
  <table>
    <?php foreach($department as $element){ ?>
      <td><?= $element ?></td>
    <?php } ?>
  </table>
</body>
</html>
