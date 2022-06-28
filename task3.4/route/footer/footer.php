<?php

$footerLink = 'footer__menu--link';
$footerItem = 'footer__menu--item';
$sort = 'z-a';

$menuList = mainMenu\sortMenuList($menuList,$sort);

?>

<footer class="footer">
  <ul class="footer__menu">
  <?php mainMenu\renderList($menuList, $footerLink, $footerItem); ?>
  </ul>
</footer>

</body>
</html>