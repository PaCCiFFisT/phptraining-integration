<?php
session_start();
require 'connection.php';
$login = htmlspecialchars($_POST["login"]);
$data = file_get_contents("./users.json");
$password = htmlspecialchars($_POST['password']);

//auth by mongoDB
$usersCollection = $db->users;
function checkExistUser($login, $pass, $collection) {
  $user = $collection->findOne(['login' => $login, 'pass' => sha1($pass)]);
  if ($user) {
    $_SESSION['name'] = $user->name;
    $_SESSION['login'] = 'yes';
    $_SESSION['message'] = 'Welcome back ';
    setcookie(
      'login',
      $user->login,
      time() + 3600 * 24 * 30
    );
    require "success.php";
    exit;
  }
  else {
    echo 'Error. Check login or password';
    //    $_SESSION['message'] = 'Wrong Login or Password';
        header("refresh:2; url=./index.php");
  }
}

if (isset($_POST['login-submit'])) {
  checkExistUser($login, $password, $usersCollection);
}

//
//if (empty($login)){
//  $_SESSION['message'] = 'Login is required';
//  header('Location: ./index.php');
//}else if (empty($password)){
//  $_SESSION['message'] = 'Password is required';
//  header('Location: ./index.php');
//}
//
//if (!is_array($userData)) {
//  $userData = json_decode($data, TRUE);
//}
//else {
//  $userData = $data;
//}
//
//foreach ($userData as $user) {
//  if ($user["login"] == $login and $user["pass"] == sha1($password)) {
//    $_SESSION['name'] = $user['name'];
//    $_SESSION['login'] = 'yes';
//    $_SESSION['message'] = 'Welcome back ';
//    setcookie('login', $user["login"], time() + 3600 * 24 * 30);
//    require "success.php";
//    exit;
//  }
//
//}
//
//echo "Wrong login or password";
//header("refresh:2; url=./index.php");