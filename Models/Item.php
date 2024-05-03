<?php

class Item
{
  public $id;
  public $name;

  public function __construct(int $_id, string $_name)
  {
    $this->id = $_id;
    $this->name = $_name;
  }
}
