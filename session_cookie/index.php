<?php
session_start();
$page = 'Main';
if ($_SESSION['login'] === 'yes') {
  header('Location: ./profile.php');
}
include "./header.php";
?>

<div class="container">
  <div class="desc">
    <h2 class="desc__title">My project</h2>
    <p class="desc__text">This is training project for learning PHP</p>
  </div>
  <div class="auth__form">
    <form name="login-form" method="post" action="loginValidating.php">
      <label for="login">Your login:
        <input type="text" name="login"
               value="<?= $_COOKIE['login'] ?: '' ?>"></label>
      <label for="password">Your password:
        <input class="password" type="password" name="password"></label>
      <label for="password-checkbox">Show password
        <input type="checkbox" name="password-checkbox"
               id="password-visibility"></label>
      <input type="submit" name="login-submit" value="Login">
    </form>
  </div>
</div>
</div>


<?php
include "./footer.php";
?>

