<?php 

class Dog extends Animal
{
    private string $fur;

  public function __construct(string $name,int $legs,string $fur)
   {
    $this->name = $Animal->$name;
    $this->legs = $Animal->$legs;
    $this->fur = $fur;
   }

public function getFur()
{
    return $this->fur;
}
}

