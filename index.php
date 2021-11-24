<?php
require_once "classes/Animal.php";
require_once "classes/Dog.php";
require_once "classes/Bird.php";
require_once "classes/Snake.php";

$animals[] = new Dog("žerik",4,"brown");
$animals[] = new Dog("fido",4,"black");
$animals[] = new bird("rico",2,"yes");
$animals[] = new bird("lojza",2,"yes");
$animals[] = new snake("dežo",0,"yes");
$animals[] = new snake("fero",0,"no");
$animals[] = new bird("bramborak",2,"yes");

for ($i = 0; $i < count($animals); $i++){
    echo $animals[$i]->getname() . "|" . $animals[$i]->getlegs();
}