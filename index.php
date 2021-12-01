<?php
require_once "vendor/autoload.php";

$animals[] = new Dog("žerik",4,"brown");
$animals[] = new Dog("fido",4,"black");
$animals[] = new Bird("rico",2,"yes");
$animals[] = new Bird("lojza",2,"yes");
$animals[] = new Snake("dežo",0,"yes");
$animals[] = new Snake("fero",0,"no");
$animals[] = new Bird("bramborak",2,"yes");

for ($i = 0; $i < count($animals); $i++){
    echo $animals[$i]->getName() . "|" . $animals[$i]->getLegs();
}