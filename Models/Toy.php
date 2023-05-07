<?php
require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Brand.php';

class Toy extends Item {
    use Brand;
    public $material;
    
    function __construct(string $name, float $price, string $image, string $material, Category $category)
    {
        parent::__construct($name, $price, $image, $category);

        $this->material = $material;
    }

    public function getMaterial() {
        return $this->material;
    }
}
?>