<?php


require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Item.php';

$products = [

  new Product(1, "Cibo per cani", 10.99, "img/cibo_cani.jpg", new Category(1, "Cani", "<i class='fa-solid fa-dog'></i>"), new Item(2, "Cibo")),

  new Product(2, "Giocattolo per gatti", 5.99, "img/giocattolo_gatti.jpg", new Category(2, "Gatti", "<i class='fa-solid fa-cat'></i>"), new Item(3, "Gioco")),

  new Product(3, "Cuccia per cani", 39.99, "img/cuccia_cani.jpg", new Category(1, "Cani", "<i class='fa-solid fa-dog'></i>"), new Item(4, "Cuccia")),

  new Product(4, "Cibo per gatti", 8.99, "img/cibo_gatti.jpg", new Category(2, "Gatti", "<i class='fa-solid fa-cat'></i>"), new Item(2, "Cibo")),

  new Product(5, "Giocattolo per cani", 7.99, "img/giocattolo_cani.jpg", new Category(1, "Cani", "<i class='fa-solid fa-dog'></i>"), new Item(3, "Gioco")),

  new Product(6, "Casetta per gatti", 49.99, "img/casetta_gatti.jpg", new Category(2, "Gatti", "<i class='fa-solid fa-cat'></i>"), new Item(4, "Cuccia")),

];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />

  <!-- fontawesome  -->

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css' integrity='sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==' crossorigin='anonymous' />

  <link rel="stylesheet" href="style.css">

  <title>Pet-shop</title>
</head>

<body>

  <div class="container my-5">
    <h1 class="text-center my-5">PET SHOP</h1>
    <div class="row">
      <?php foreach ($products as $product) : ?>
        <div class="col-md-4">
          <div class="card my_card mb-5">
            <img src="<?php echo $product->image; ?>" class="card-img-top p-3" alt="<?php echo $product->name; ?>">
            <div class="card-body ">
              <h5 class="card-title"><?php echo $product->name; ?></h5>
              <p class="card-text text-danger ">Prezzo: <?php echo $product->price; ?> &euro;</p>
              <p class="card-text">Categoria: <?php echo $product->category->icon; ?> <?php echo $product->category->name ?></p>
              <p class="card-text">Tipo: <?php echo $product->item->name; ?></p>
              <a href="#" class="btn btn-dark">Acquista</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>