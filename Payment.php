<?php

class Payment
{
  private $id;
  private $user_id;
  private $product_id;
  private $quantity;
  private $total_price;
  private $created_at;
  private $updated_at;
  private $cardName;
  private $cardNumber;
  private $cardExpiry;
  private $cardCvv;

  public function __construct(
    $id,
    $user_id,
    $product_id,
    $quantity,
    $total_price,
    $created_at,
    $updated_at,
    $cardName,
    $cardNumber,
    $cardExpiry,
    $cardCvv
  ) {
    $this->id = $id;
    $this->user_id = $user_id;
    $this->product_id = $product_id;
    $this->quantity = $quantity;
    $this->total_price = $total_price;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->cardName = $cardName;
    $this->cardNumber = $cardNumber;
    $this->cardExpiry = $cardExpiry;
    $this->cardCvv = $cardCvv;
  }

  public function checkExpiryDate($expiryDate)
  {
    $expiryDate = explode("/", $expiryDate);
    $expiryDate = $expiryDate[1] . "/" . $expiryDate[0] . "/" . $expiryDate[2];
    $expiryDate = strtotime($expiryDate);
    $currentDate = strtotime(date("Y/m/d"));
    if ($expiryDate < $currentDate) {
      throw new Exception("Expiry date is invalid");
    }
  }
  public function getExpiryDate()
  {
    return $this->cardExpiry;
  }
}

?>
