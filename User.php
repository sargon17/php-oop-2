<?php

class User
{
  private $name;
  private $email;
  private $password;
  private $role;
  private $status;
  private $created_at;
  private $updated_at;

  public function __construct(
    $name,
    $email,
    $password,
    $role,
    $status,
    $created_at,
    $updated_at
  ) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->role = $role;
    $this->status = $status;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
  }

  public function getName()
  {
    return $this->name;
  }
}

?>
