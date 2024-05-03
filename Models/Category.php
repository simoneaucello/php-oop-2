<?php

class Category
{
  public $id;
  public $name;
  public $icon;

  public function __construct(int $_id, string $_name, string $_icon)
  {

    $this->id = $_id;
    $this->name = $_name;
    $this->icon = $_icon;
  }
}
