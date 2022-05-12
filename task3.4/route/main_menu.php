<?php

namespace mainMenu;

$menuList = [
  [
    'title' => 'Home',
    'link' => '../main/index.php',
  ],
  [
    'title' => 'About',
    'link' => '../about/about.php',
  ],
  [
    'title' => 'ContactsContactsContactsContactsContactsContactsContacts',
    'link' => '../contacts/contacts.php',
  ],
  [
    'title' => 'Feedback',
    'link' => '../feedback/feedback.php',
  ],
  [
    'title' => 'Shop',
    'link' => '../shop/shop.php',
  ],
];


function sortMenuList(array $list, string $sort = ''): array {
  switch ($sort) {
    case '':
      return $list;
    case 'a-z':
      sort($list);
      return $list;

    case 'z-a':
      rsort($list);
      return $list;

  }
  return $list;
}



function renderList($menuList, $aclass, $liclass) {
  foreach ($menuList as $key => $item) {
    ?>
    <li class=<?= $liclass ?>>
      <a
        class="<?php
        if ($item['title'] == $_GET['page']) {
          echo "$aclass underline";
        }
        else {
          echo "$aclass";

        }
        ?>"
        href="<?= $item['link'] . '?page=' . $item['title'] ?>"><?= strlen
        ($item['title'])>15 ? substr($item['title'], 0,12).'...':$item['title']
        ?></a>
    </li>
  <?php }
}

function renderTitleH1(){
  if (isset($_GET['page'])){?>
    <h1><?=$_GET['page']?></h1>
  <?php }
  }
?>
<!--//renderList($menuList, 'asd','ddd');-->
