<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$computer = array(
  'GPU' => "RTX 3070",
  'CPU' => "Intel Core i9 9900K",
  'RAM' => "16 GB 3200MHZ",
  'SSD' => "SSD Samsung EVO 860 M.2 250GB",
  'Motherboard' => "Asus",
  'Fan' => "be quiet!",
  'Keyboard' => "HyperX Alloy",
  'Mouse' => "Razer Viper",
  'Headphones' => "HyperX Cloud II",

);

?>

<h1> Computer </h1>

<ul>

 <li> GPU <?= $computer['GPU'] ?> </li>
 <li> CPU <?= $computer['CPU'] ?> </li>
 <li> RAM <?= $computer['RAM'] ?> </li>
 <li> SSD <?= $computer['SSD'] ?> </li>
 <li> Motherboard <?= $computer['Motherboard'] ?> </li>
 <li> Fan <?= $computer['Fan'] ?> </li>
 <li> Keyboard <?= $computer['Keyboard'] ?> </li>
 <li> Mouse <?= $computer['Mouse'] ?> </li>
 <li> Headphones <?= $computer['Headphones'] ?> </li>

</ul>

</body>
</html>