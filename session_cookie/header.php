<?php
if($_COOKIE['login']){
  setcookie('login',$_COOKIE['login'],time()+3600*24*30);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$page?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth">
  <div class="auth__menu">
    <ul class="auth__menu--list">
      <li class="auth__menu--item ">
        <a href="<?=$_SESSION['login']==='yes' ? './logout.php' : './index.php';
        ?>" class="auth__menu--link <?=$page==='Main'? 'active' : '';?>">
          <?=$_SESSION['login']==='yes' ? 'Exit' : 'login';?>
        </a>
      </li>
      <li class="auth__menu--item">
        <a href="register.php" class="auth__menu--link <?=$page==='Register'? 'active' : '';?>
        <?=$_SESSION['login']==='yes' ? 'visually-hidden' : ' ';?>">Register</a>
      </li>
      <li class="auth__menu--item">
        <a href="./restore_pass.php" class="auth__menu--link
        <?=$page==='Restore password'? 'active' : '';?>
        <?=$_SESSION['login']==='yes' ? 'visually-hidden' : '';
        ?>">Forgot
          password?</a>
      </li>
    </ul>
  </div>