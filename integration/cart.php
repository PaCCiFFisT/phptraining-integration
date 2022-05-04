<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <title>Cart</title>
</head>
<body>
<?php
$option = $_GET['id'];
include './products.php';
?>
<header class="header">
  <div class="header__menu">
    <ul class="header__menu--list">
      <li class="header__menu--item">
        <a href="index.php" class="header__menu--link">Main page</a>
      </li>
      <li class="header__menu--item">
        <a href="about.php" class="header__menu--link">About us</a>
      </li>
      <li class="header__menu--item">
      <a href="cart.php" class="header__menu--link">Cart</a>
    </li>
    </ul>
  </div>
</header>
<h2>Buying</h2>
<span class="completing__text"></span>
<ul class="catalog__list">
  <?php
  foreach ($products as $product){
    if($product['id'] == $option){?>
      <li class="catalog__item cart__item">
        <img src="<?=$product['image']?>" alt="<?=$product['alt']?>"
             class="catalog__img"/>
        <p class="catalog__item catalog__item--desc"><?= $product['name']?></p>
      </li>
    <?php }
  }
  ?>
</ul>
<form method="post" action="buy-complete.php?id=<?=$option?>">
  <span>Your name:</span>
  <input type="text" name="name" id="name">
  <input class="submit__btn" type="submit" name="submit" value="Submit">
</form>
<script src="./index.js"></script>
</body>

</html>