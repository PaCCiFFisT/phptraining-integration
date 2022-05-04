<?php
session_start();

echo  $_SESSION['message'] .  $_SESSION['name'];
echo "<br><button ><a href='profile.php'>Go to profile</a></button>";
