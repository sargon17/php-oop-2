<?php

include_once __DIR__ . "./Product.php";

class ToyProduct extends Product
{
  private $type;
  private $material;
  private $color;
  private $size;
  private $weight;

  public function __construct(
    $name,
    $img,
    $price,
    $description,
    $created_at,
    $updated_at,
    $brand,
    $type,
    $material,
    $color,
    $size,
    $weight
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
    $this->type = $type;
    $this->material = $material;
    $this->color = $color;
    $this->size = $size;
    $this->weight = $weight;
  }
  public function getInfoCard()
  {
    $infoCard = parent::getInfoCard();
    $infoCard .= "<p>Type: {$this->type}</p>";
    $infoCard .= "<p>Material: {$this->material}</p>";
    return $infoCard;
  }
}

?>
