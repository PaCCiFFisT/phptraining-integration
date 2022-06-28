<?php
$defineNum = rand(1, 10);
$answer = $defineNum + rand(1, 10);

if (isset($_POST['submitBtn'])) {
  $val1 = $_POST['defineNum'];
  $userVal = $_POST['userNum'];
  $sum = $_POST['answer'];
  var_dump($_POST);
  if ($sum - $val1 == $userVal) {
    $str = "The answer is correct! $val1 + $userVal = $sum ";
    $style = 'style = "color: green ; font-size: 24px"';

  }
  else {
    $style = 'style = "color: red; font-size: 24px"';
    $str = "The answer ".($userVal ? : 0) ." is incorrect!";
    $defineNum = $val1;
    $answer = $sum;
  }
}
