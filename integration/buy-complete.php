<?php
//$id = $_GET['id'];
//check if field 'name' _POST is filled out
//echo $id;
if (!empty($_POST['name'])){
  echo 'Thank you for your order, ' . htmlspecialchars($_POST['name']) . '!';
}else{
  echo 'Please enter your name.';
  header('refresh:2; url=./cart.php?id=' . $_GET["id"]);
}
?>