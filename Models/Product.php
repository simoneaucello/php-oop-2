<?php

class Product
{
  public $id;
  public $name;
  public $price;
  public $image;
  public $category;
  public $item;

  public function __construct(int $_id, string $_name, float $_price, string $_image, string $_category, string $_item)
  {


    $this->id = $_id;
    $this->name = $_name;
    $this->price = $_price;
    $this->image = $_image;
    $this->category = $_category;
    $this->item = $_item;
  }
}
