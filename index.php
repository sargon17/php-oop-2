<?php

include_once __DIR__ . "./User.php";

include_once __DIR__ . "./Product.php";
include_once __DIR__ . "./FoodProduct.php";
include_once __DIR__ . "./ToyProduct.php";
include_once __DIR__ . "./VitaminProduct.php";

$user = new User(
  "John Doe",
  "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50",
  "some@mail.com",
  "animal lover",
  "registered",
  "2020-01-01",
  "2020-01-01"
);

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

$toyRope = new ToyProduct(
  "Mammoth Cottonblend 5 Knot Dog Rope Toy, Color Varies",
  "https://img.chewy.com/is/image/catalog/80745_MAIN._AC_SL1200_V1633020738_.jpg",
  "$8.47",
  "This 5-knot dog rope is made of durable, breathable cottonblend fibers.",
  "2022-06-16",
  "2022-06-16",
  "Mammoth",
  "Rope",
  "Cottonblend",
  "Varies",
  "5 Knots",
  "5"
);

$toyHotdog = new ToyProduct(
  "Frisco Baseball Corndog Basket Plush Squeaky Dog Toy, 3 count",
  "https://img.chewy.com/is/image/catalog/252746_MAIN._AC_SL1200_V1613158281_.jpg",
  "$9.99",
  "Plush checkered basket with two detachable corndogs on hook and loop fasteners.",
  "2022-06-16",
  "2022-06-16",
  "Frisco",
  "Basket",
  "Plush",
  "Squeaky",
  "Dog Toy",
  "3"
);

$vitamins = new VitaminProduct(
  "Zesty Paws Probiotic Bites Pumpkin Flavored Soft Chews Digestive Supplement for Dogs",
  "https://img.chewy.com/is/image/catalog/124697_MAIN._AC_SL1200_V1644976333_.jpg",
  "$26.97",
  "This probiotic supplement is made with Zesty Paws® Probiotic Bites® and contains Zesty Paws® Probiotic Bites® and Zesty Paws® Probiotic Bites®.",
  "2022-06-16",
  "2022-06-16",
  "Zesty Paws",
  "Digestive Supplement",
  "Pumpkin Flavored Soft Chews",
  "Probiotic Bites"
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
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body{
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }
    header {
        background-color: #ffc107;
        padding: 30px;
        color: #f5f5f5;
        box-shadow: 0px 0px 10px #0000005a;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    header .user-info{
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: #f5f5f5;
        font-size: 20px;
        font-weight: bold;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 5px;
    }

    header .user-info:hover{
        background-color: #fece0f;
    }
    header .user-img{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #fff;
        overflow: hidden;
        margin-right: 20px;
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
        border-radius: 10px;
        box-shadow: 0px 8px 5px -5px #0000004a;
        background-color: #fff;
        margin-right: 20px;
        margin-bottom: 20px;
        padding:4px 8px;
        position: relative;
        overflow: hidden;
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
    <header>
        <h1>Doge Shop</h1>
        <div>
            <a href="index.php" class="user-info">
                <?php echo "{$user->getName()} <img src='{$user->getImg()}' alt='{$user->getName()}' class='user-img'>"; ?>
            </a>
        </div>
    </header>
    <div class="products-row">
        <div class="product">
            <?php echo $pedigree->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
        <div class="product">
            <?php echo $purina->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
        <div class="product">
            <?php echo $toyRope->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
        <div class="product">
            <?php echo $toyHotdog->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
        <div class="product">
            <?php echo $vitamins->getInfoCard(); ?>
            <button class="product-btn">Add to Cart</button>
        </div>
    </div>


    
</body>
</html>