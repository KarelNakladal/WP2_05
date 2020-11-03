<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$runners = array(
  '1' => "Karel Nakládal",
  '2' => "Jakub Vávrů",
  '3' => "Jan Šlechta",
  '4' => "Libor Pluháček",
  '5' => "Martin Kokeš",
  '6' => "Michal Plaček",
  '7' => "Sorin Eni",
  '8' => "Šimon Siksta",
  '9' => "Štěpán Kolarovský",
)
?>
<h1>Závodníci</h1>
<?php
for ($i = 1; $i <= count($runners); $i++) {?>
 <?= $i?> . <?=$runners[$i]?> <br>

<?php }

?> 
</body>
</html>