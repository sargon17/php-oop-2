<?php

class Product
{
  private $name;
  private $price;
  private $description;
  private $created_at;
  private $updated_at;

  public function __construct(
    $name,
    $price,
    $description,
    $created_at,
    $updated_at
  ) {
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
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
}

?>
