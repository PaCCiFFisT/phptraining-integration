<?php
session_start();
$page = 'Register';
if ($_SESSION['login']){
  header('Location: ./profile.php');
}
include "./header.php";
?>

  <div class="container">
    <div class="desc">
      <h2 class="desc__title">Registration</h2>
      <p class="desc__text">Please fill all fields</p>
      <p>Fields marked "*" are required</p>
    </div>
    <div class="auth">
      <div class="auth__form">
        <form name="reg-form" method="post" action="regValidating.php">
          <label for="name">Your name:
            <input type="text" name="name" value="<?=
            $_SESSION['regName']? :'';
            ?>"></label>
          <label for="login">Your login:
            <input type="text" name="login" value="<?=
            $_SESSION['regLogin']? :'';
            ?>">
            </label>
          <label for="password">Your password:
            <input class="password" type="password" name="password"></label>
          <label for="password-repeat">Repeat your password:
            <input class="password" type="password"
                   name="password-repeat"></label>
          <label for="password-checkbox">Show password
            <input  type="checkbox" name="password-checkbox"
                   id="password-visibility"></label>
          <input type="submit" name="reg-submit" value="Register">
        </form>
        <p style="color:red; font-size: 20px"><?=$_SESSION['message']?></p>
      </div>
    </div>
  </div>


<?php
include "./footer.php";
?>

