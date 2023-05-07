<?php
trait Brand {
    public $brand;

    public function setBrand(string $brand) {
        if($brand == "Animaletto") {
            $this->brand = $brand;
        }  else {
            throw new Exception("AY CARAMBA!");
        }
    }
    public function getBrand() {
       return $this->brand;
    }
}
?>