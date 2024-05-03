<?php

require_once __DIR__ . '/db.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Item.php';

$dog_food = new Product(1, "Cibo per cani", 10.99, "img/cibo_cani.jpg", new Category(1, "Cani", "icona_cani.png"), new Item(2, "Cibo"));

$cat_toy = new Product(2, "Giocattolo per gatti", 5.99, "giocattolo_gatti.jpg", new Category(2, "Gatti", "icona_gatti.png"), new Item(3, "Gioco"));

$home_dog = new Product(3, "Cuccia per cani", 39.99, "cuccia_cani.jpg", new Category(1, "Cani", "icona_cani.png"), new Item(4, "Cuccia"));

$cat_food = new Product(4, "Cibo per gatti", 8.99, "cibo_gatti.jpg", new Category(2, "Gatti", "icona_gatti.png"), new Item(2, "Cibo"));

$doggy_toy = new Product(5, "Giocattolo per cani", 7.99, "giocattolo_cani.jpg", new Category(1, "Cani", "icona_cani.png"), new Item(3, "Gioco"));

var_dump($dog_food);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

  <link rel="stylesheet" href="style.css">

  <title>Pet-shop</title>
</head>

<body>

</body>

</html>