<?php
require_once __DIR__. "/Class/Animal.php";

//buat objek
$sheep = new Animal();
//set nama hewan
$sheep->setName("Shaun");
//set jumlah kaki
$sheep->setLegs(4);
//set berdarah dingin
$sheep->setColdBlooded(false);

//cetak
echo "Name : " .$sheep->getName() . "<br/>";
echo "Legs : ".$sheep->getLegs() . "<br/>";
echo "Cold Blooded : ".$sheep->getColdBlooded() . "<br/><br/>";

//buat objek monyet
$monkey = new Ape();
$monkey->setName("Sungokong");
$monkey->setLegs(2);
$monkey->setColdBlooded(true);

echo "Name : ". $monkey->getName()."<br/>";
echo "Legs : ". $monkey->getLegs()."<br/>";
echo "Cold Blooded : ". $monkey->getColdBlooded()."<br/><br/>";
echo "Yell : ".$monkey->yell()."<br/>";

//buat objek TOAD
$toad = new Frog();
$toad->setName("Giant Toad");
$toad->setLegs(4);
$toad->setColdBlooded(true);

echo "Name : ". $toad->getName()."<br/>";
echo "Legs : ".$toad->getLegs()."<br/>";
echo "Cold Blooded : ".$toad->getColdBlooded()."<br/>";
echo "Jump : ".$toad->jump()."<br/>";
