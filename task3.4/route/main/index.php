<?php

require( "./handler.php");

require("./../header/header.php");
global $defineNum,$answer,$str,$style;
?>
<?=mainMenu\renderTitleH1()?>
<h1>What number is needed?</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
  <input readonly value="<?=$defineNum?>" type="number" name="defineNum">
  <span> + </span>
  <input type="number" name="userNum">
  <span> = </span>
  <input readonly value="<?=$answer?>" type="number" name="answer">
  <input type="submit" name="submitBtn">
</form>
<p <?=$style?>><?=$str?></p>
<?php
require("./../footer/footer.php");
