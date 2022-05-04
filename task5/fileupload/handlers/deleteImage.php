<?php
$result = json_decode(file_get_contents("php://input"), TRUE);
$dir = '../upload/';
if (isset($result)){
  foreach ($result as $fileName) {
    unlink($dir.$fileName);
  }
  $message = "Deleting success";
}
