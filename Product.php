<?php

class Product
{
  protected $name;
  protected $price;
  protected $description;
  protected $created_at;
  protected $updated_at;
  protected $brand;

  public function __construct(
    $name,
    $img,
    $price,
    $description,
    $created_at,
    $updated_at,
    $brand
  ) {
    $this->name = $name;
    $this->img = $img;
    $this->price = $price;
    $this->description = $description;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->brand = $brand;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getPrice()
  {
    return $this->price;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function getCreatedAt()
  {
    return $this->created_at;
  }
  public function getUpdatedAt()
  {
    return $this->updated_at;
  }

  public function getInfoCard()
  {
    $infoCard = "<img src='{$this->img}' alt='{$this->name}' />";
    $infoCard .= "<h3 class='product-title'> {$this->name}</h3>";
    $infoCard .= "<p class='product-brand'>Brand: {$this->brand}</p>";
    $infoCard .= "<p class='product-price'>Price: {$this->price}</p>";
    $infoCard .= "<p class='product-desc'>Description: {$this->description}</p>";
    return $infoCard;
  }
}

?>
