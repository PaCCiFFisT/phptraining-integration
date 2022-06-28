<?php

require('./handlers/upload.php')
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <title>Upload your photo</title>
</head>
<body>
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

<form name="upload__form"  id="upload__form" class="form" method="post"
       enctype="multipart/form-data">
  <input class="form__upload" type="file" name="file[]"
         id="file" multiple>
  <div class="preview">
    <div class="preview__container"></div>
  </div>
  <input id="upload__form--submit" class="form__btn" name="submit"
         type="submit"">
</form>
<br>
<div class="response"></div>

<script src="./js/index.js"></script>

</body>
</html>

