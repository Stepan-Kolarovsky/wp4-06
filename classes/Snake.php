<?php

class Snake extends Animal
{
    private string $poisnonus;

public function __construct(string $name,int $legs,string $poisnonus)
{
    $this->name = $Animal->$name;
    $this->legs = $Animal->$legs;
    $this->poisnonus = $poisnonus;
}
public function getPoisnonus()
{
    return $this->poisnonus;
}
}