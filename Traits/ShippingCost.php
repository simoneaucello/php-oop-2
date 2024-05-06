<?php

trait ShippingCost
{
  public $shippingCost;

  public function setShippingCost($cost)
  {
    $this->shippingCost = $cost;
  }

  public function getShippingCost()
  {
    return $this->shippingCost;
  }
}
