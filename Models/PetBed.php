<?php
require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Brand.php';

class PetBed extends Item {
    use Brand;
    public $softness;
    
    function __construct(string $name, float $price, string $image, int $softness, Category $category)
    {
        parent::__construct($name, $price, $image, $category);

        $this->softness = $softness;
    }

    public function getSoftness() {
        return $this->softness;
    }
}
?>