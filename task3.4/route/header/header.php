<?php
require "./../main_menu.php";
global $menuList;
$headerLink = 'header__menu--link';
$headerItem = 'header__menu--item';
$sort = 'a-z';

$menuList = mainMenu\sortMenuList($menuList,$sort);

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Task3.4</title>
</head>
<body>

<header class="header">

  <ul class="header__menu">

  <?php mainMenu\renderList($menuList, $headerLink, $headerItem); ?>


  </ul>
</header>
