<?php
require_once 'db.php';
try {
    $toy->setBrand("Animalett");
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>Pet Shop</h1>
    <?php
    foreach ($items as $SingleItem) {
    ?>
        <div class="card" style="width: 15rem;">
            <img src="..." class="card-img-top" alt="Immagine prodotto">
            <div class="card-body">
                <strong class="card-title"><?= $SingleItem->name ?></strong> <span><i class="fa-solid <?= $SingleItem->category->icon ?>"></i></span> <br>
                <div>
                    <?php

                    switch (get_class($SingleItem)) {

                        case 'Food':
                            echo "Weight: " . $SingleItem->getWeight(); echo "Kg"; 
                            echo "<br>";
                            echo "Ingredients: " . $SingleItem->getIngredients();
                            break;
                            
                        case 'Toy':
                            echo "Material: " .  $SingleItem->getMaterial();
                            echo "<br>";
                            echo "Brand: " . $SingleItem->getBrand();
                            break;

                        case 'PetBed':
                            echo "Softness: " .  $SingleItem->getSoftness(); echo "/10";
                            echo "<br>";
                            echo "Brand: " . $SingleItem->getBrand();
                            break;
                    }

                    ?>
                </div>
                <strong>Prezzo:</strong> <?= $SingleItem->price ?>€ <br>
                <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
        </div>
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>