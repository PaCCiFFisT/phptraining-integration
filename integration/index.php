<!doctype html>
<html lang="en">
<?php
$title = 'Main Page';
require_once './head.html'
?>
<body>
<?php
  require_once './header.html';
?>

<main class="main">
  <div class="container">
    <div class="wrapper">
      <h2 class="catalog__title">Catalog:</h2>
      <div class="catalog__container">

        <ul class="catalog__list">
          <?php
          require './products.php';
          foreach ($products as $product){?>
            <li class="catalog__item">
            <img src="<?=$product['image']?>" alt="<?=$product['alt']?>"
                 class="catalog__img"/>
            <p class=" catalog__item--desc"><?=$product['name']?></p>
            <a href="cart.php?id=<?=$product['id']?>"
               class="catalog__item--btn">Buy
              <?=$product['name']?></a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</main>
<!--<script src="./index.js"></script>-->
</body>
</html>