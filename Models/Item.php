<?php
require_once __DIR__ .'/Category.php';
class Item {
    public $name;
    public $price;
    public $image;
    public $category;

    function __construct(string $name, float $price, string $image, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}
?>