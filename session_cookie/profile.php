<?php
session_start();

$page = 'Profile';
include "./header.php";

?>

<div class="container">
  <div class="desc">
    <h2 class="desc__title">Personal cabinet</h2>
    <p>Hello <?=$_SESSION['name']?></p>
  </div>
</div>


<?php
include "./footer.php";
?>

