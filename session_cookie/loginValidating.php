<?php
session_start();

$login = $_POST["login"];
$password = $_POST["password"];
$data = file_get_contents("./users.json");
$userData = json_decode($data, true);

foreach ($userData as $user){
  if ($user["login"]==$login and $user["pass"]==$password){
    $_SESSION['name'] = $user['name'];
    $_SESSION['login'] = 'yes';
    $_SESSION['message'] = 'Welcome back ';
    setcookie('login',$user["login"],time()+3600*24*30 );
    require "success.php";
    exit;
  }

}
echo "Wrong login or password";
header("refresh:2; url= ./index.php?login=yes");
exit;
?>
