<?php
session_start();

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$name = htmlspecialchars($_POST['name']);
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$passwordRepeat = htmlspecialchars($_POST['password-repeat']);
$_SESSION['regName'] = $name;
$_SESSION['regLogin'] = $login;

if ($password!=$passwordRepeat ){
  $_SESSION['message'] = 'Passwords is not matches';
   header('Location: ./register.php');
}else if (empty($name)){
  $_SESSION['message'] = 'Name is require';
  header('Location: ./register.php');
}else if (empty($login)){
  $_SESSION['message'] = 'Login is require';
  header('Location: ./register.php');
}else if (empty($password)){
  $_SESSION['message'] = 'Password is require';
  header('Location: ./register.php');
}else{
  require './addUser.php';
  setcookie('login',$login,time()+3600*24*30 );
  $_SESSION['message'] = 'Your account is created, ';
  $_SESSION['name'] = $name;
  $_SESSION['login'] = 'yes';
  header('Location: ./success.php');
}