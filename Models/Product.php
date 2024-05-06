<?php

require_once __DIR__ . '/ShippingCost.php';

class Product
{

  public $id;
  public $name;
  public $price;
  public $image;
  public $category;
  public $item;

  use ShippingCost;


  public function __construct(int $_id, string $_name, float $_price, string $_image, Category $_category, Item $_item)
  {

    if ($_name === '') {
      throw new Exception('Il prodotto non ha un nome');
    }


    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->category = $_category;
    $this->item = $_item;
  }
}
