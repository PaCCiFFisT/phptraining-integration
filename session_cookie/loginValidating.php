<?php
session_start();

$login = htmlspecialchars($_POST["login"]);
$data = file_get_contents("./users.json");
$password = htmlspecialchars($_POST['password']);

if (empty($login)){
  $_SESSION['message'] = 'Login is required';
  header('Location: ./index.php');
}else if (empty($password)){
  $_SESSION['message'] = 'Password is required';
  header('Location: ./index.php');
}

if (!is_array($userData)) {
  $userData = json_decode($data, TRUE);
}
else {
  $userData = $data;
}

foreach ($userData as $user) {
  if ($user["login"] == $login and $user["pass"] == sha1($password)) {
    $_SESSION['name'] = $user['name'];
    $_SESSION['login'] = 'yes';
    $_SESSION['message'] = 'Welcome back ';
    setcookie('login', $user["login"], time() + 3600 * 24 * 30);
    require "success.php";
    exit;
  }

}

echo "Wrong login or password";
header("refresh:2; url=./index.php");

exit();