<?php

class Bird extends Animal
{
    private string $isflying;

public function __construct(string $name,int $legs,string $isflying)
{
  $this->name;
  $this->legs;
  $this->isflying;
}
public function getname() {
    return $this->name;
}
public function getlegs() {
    return $this->legs;
}
public function getisflying()
{
    return $this->isflying;
}
}