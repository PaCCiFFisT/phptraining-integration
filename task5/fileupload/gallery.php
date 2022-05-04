<?php
require './handlers/render.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <title>Gallery</title>
</head>
<body>
<?php

?>
<header class="header">
  <ul class="menu__list">
    <li class="menu__item">
      <a href="gallery.php" class="menu__link">Go to gallery</a>
    </li>
    <li class="menu__item">
      <a href="index.php" class="menu__link">Home</a>
    </li>
  </ul>
</header>
<div class="container">
  <?php

renderGallery();
  ?>

</div>
<input id="delete" type="submit" value="Delete" name="delete">

<script src="./js/index.js"></script>
</body>
</html>