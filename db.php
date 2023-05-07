<?php
require_once __DIR__ . '/Models/Item.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/PetBed.php';
$categories = [
    new Category("fa-dog"),
    new Category("fa-cat")
];

$item = new Item("Nome Prodotto", 9.99, "img.jpeg", $categories[0]);
// var_dump($item);
$food = new Food("Nome Cibo", 9.99, "cibo.jpeg", 12.5, "meat", $categories[1]);
// var_dump($food);
$toy = new Toy("Nome Giocattolo", 9.99, "toy.jpeg", "plastic", $categories[1]);
// var_dump($toy);
$petbed = new PetBed("Nome Cuccia", 9.99, "petbed.jpeg", 7, $categories[0]);
// var_dump($petbed);
$items = [
    $item,
    $food,
    $toy,
    $petbed
];
?>