<?php

class Bird extends Animal
{
    private string $isflying;

public function __construct(string $name,int $legs,string $isflying)
{
    $this->name = $Animal->$name;
    $this->legs = $Animal->$legs;
  $this->isflying = $isflying;
}
public function getIsFlying()
{
    return $this->isflying;
}
}