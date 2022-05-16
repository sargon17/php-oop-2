<?php

include_once __DIR__ . "./Product.php";

class FoodProduct extends Product
{
  private $expiry_date;
  private $shelf_life;
  private $type;
  private $flavor;

  public function __construct(
    $name,
    $img,
    $price,
    $description,
    $created_at,
    $updated_at,
    $brand,
    $expiry_date,
    $shelf_life,
    $type,
    $flavor
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
    $this->expiry_date = $expiry_date;
    $this->shelf_life = $shelf_life;
    $this->type = $type;
    $this->flavor = $flavor;
  }

  public function getInfoCard()
  {
    $infoCard = parent::getInfoCard();
    $infoCard .= "<p>Type: {$this->type}</p>";
    $infoCard .= "<p class='product-flavor'>Flavor: {$this->flavor}</p>";
    return $infoCard;
  }
}

?>
