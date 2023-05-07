<?php
require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/Category.php';
class Food extends Item {
    public $weight;
    public $ingredients;
    
    function __construct(string $name, float $price, string $image, float $weight, string $ingredients, Category $category)
    {
        parent::__construct($name, $price, $image, $category);

        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

    public function getWeight() {
        return $this->weight;
    }
    public function getIngredients() {
        return $this->ingredients;
    }
}
?>