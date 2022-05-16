<?php

class User
{
  private $name;
  private $img;
  private $email;
  private $role;
  private $status;
  private $created_at;
  private $updated_at;

  public function __construct(
    $name,
    $img,
    $email,
    $role,
    $status,
    $created_at,
    $updated_at
  ) {
    $this->name = $name;
    $this->img = $img;
    $this->email = $email;
    $this->role = $role;
    $this->status = $status;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
  }

  public function getName()
  {
    return $this->name;
  }
  public function getImg()
  {
    return $this->img;
  }

  private function checkDiscount()
  {
    if ($this->status == "registered") {
      return "20%";
    } else {
      return "0%";
    }
  }
}

?>
