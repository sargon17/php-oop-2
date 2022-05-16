<?php

include_once __DIR__ . "./Product.php";
include_once __DIR__ . "./FoodProduct.php";

$pedigree = new FoodProduct(
  "Pedigree Adult Complete Nutrition Grilled Steak & Vegetable Flavor Dry Dog Food",
  "https://img.chewy.com/is/image/catalog/362460_MAIN._AC_SL1200_V1643222860_.jpg",
  "$21.98",
  "Complete and balanced nutrition has antioxidants, vitamins and minerals to help maintain a healthy lifestyle.",
  "2022-06-16",
  "2022-06-16",
  "Pedigree",
  "2024-01-01",
  "10",
  "Dry Dog Food",
  "Grilled Steak & Vegetable Flavor"
);
$purina = new FoodProduct(
  "Purina Pro Plan Adult Sensitive Skin & Stomach Salmon & Rice Formula Dry Dog Food",
  "https://img.chewy.com/is/image/catalog/101552_MAIN._AC_SL1200_V1642462909_.jpg",
  "$17.18",
  "This easily-digestible dog food is crafted without corn, wheat or soy.",
  "2022-06-16",
  "2022-06-16",
  "Purina",
  "2024-01-01",
  "10",
  "Dry Dog Food",
  "Sensitive Skin & Stomach Salmon & Rice Formula"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doge Shop</title>
</head>

<style>
    body{
        background-color: #f5f5f5;

    }
    .products-row{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: stretch;
        margin: 20px;
    }
    .product {
        width: 300px;
        min-height: 300px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #0000000f;
        margin-right: 20px;
        margin-bottom: 20px;
        padding:4px 8px;
        border: 1px solid #bbb;
        position: relative;
    }
    .product img {
        width: 100%;
        max-height: 100%;
        aspect-ratio: 1;
        object-fit: contain;
    }
    .product p{
        margin: 0;
        padding: 0;
        font-size: 12px;
        color: #666;
    }
    .product .product-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .product .product-price {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: red;
    }
    .product .product-desc {
        font-size: 12px;
        margin-bottom: 10px;
    }
    .product .product-brand {
        font-size: 12px;
        margin-bottom: 10px;
    }
    .product .product-flavor {
        font-size: 12px;
        margin-bottom: 60px;
    }
    .product .product-btn{
        position: absolute;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 40px;
        background-color: #ffc107;
        border-radius: 0 0 5px 5px;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        line-height: 40px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
        margin-top: 10px;
    }
    .product .product-btn:hover{
        background-color: #fece0f;
        color: #fff;
    }
    .product .product-btn:focus{
        outline: none;
    }
    .product .product-btn:active{
        transform: translateY(2px);
        transition: none;
        }
</style>
<body>
    <h1>Doge Shop</h1>
    <div class="products-row">
        <div class="product">
            <?php echo $pedigree->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
        <div class="product">
            <?php echo $purina->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
    </div>


    
</body>
</html>