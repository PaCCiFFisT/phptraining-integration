<?php
session_start();
$data = $_POST;

$jsonData = "
  ,"."\"".$name."\"". ':' . json_encode(array_slice($data,0,3))."
}";

$fName= 'users.json';
$file = fopen($fName, 'r+');

if (!$file){
  $file = fopen($fName, 'w+');
}else {
  fseek($file, -3, SEEK_END);
  fwrite($file,$jsonData);
  fclose($file);
}
