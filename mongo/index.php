<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<?php
require "data.php";
global $set;
$default = "Choose location";
?>
<body>
<form name="restaurantList">
  <select style="width: 150px" name="location" id="location">
    <option class="loc__option" value="default"
            selected><?= $default ?></option>
    <?php
    foreach ($set as $el) {
      ?>
      <option class="loc__option" value="<?= $el ?>"><?= $el ?></option>
      <?php
    }

    ?>
  </select></form>
<!--//need catch location value and set restaurants based on this-->
<select style="width: 150px" name="restaurant" id="restaurant">

</select>
<script type="text/javascript" src="script.js"></script>
</body>
</html>

