<?php

include_once __DIR__ . "./Product.php";

class VitaminProduct extends Product
{
  private $health_benefit;
  private $flavor;
  private $food_type;

  public function __construct(
    $name,
    $img,
    $price,
    $description,
    $created_at,
    $updated_at,
    $brand,
    $health_benefit,
    $flavor,
    $food_type
  ) {
    parent::__construct(
      $name,
      $img,
      $price,
      $description,
      $created_at,
      $updated_at,
      $brand
    );
    $this->health_benefit = $health_benefit;
    $this->flavor = $flavor;
    $this->food_type = $food_type;
  }
}

?>
