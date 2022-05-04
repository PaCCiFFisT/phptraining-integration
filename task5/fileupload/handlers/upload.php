<?php

if ($_FILES) {
  http_response_code(201);

  $regExTypes = "/^(image\/jpeg|image\/jpg|image\/png)$/i";
$maxFiles = 5;
$maxSize = 5 * 1000000; // Mb to bytes
$file = $_FILES['file'];
$count = count($_FILES['file']['name']);
// check for choosing file
  if ($_FILES['file']['error'][0] == 4) {
    $err = new Error('Please choose file for upload', 99);
//    header('refresh: 2, ../index.php');
    exit();
  }
//check count of files
if ($count > $maxFiles) {
  $message ='Too many files';
  exit(json_encode($message));
//  header('refresh: 2, ../index.php');
}
//Putting files in directory
for ($i = 0; $i < $count; $i++) {
  if ($file['size'][$i] < $maxSize && preg_match($regExTypes, $file['type'][$i])) {
    $from = $file['tmp_name'][$i];
    $destPath = '../upload/' . $file['full_path'][$i];
    move_uploaded_file($from, $destPath);
//    header('refresh: 2, ../index.php');
  }
  elseif ($file['size'][$i] >= $maxSize) {
    $message = 'Too big file';

//    header('refresh: 2, ../index.php');
    exit(json_encode($message));
  }
  elseif (preg_match($regExTypes, $file['name']) == 0) {
    $message = 'Type of file is incorrect';
   //    header('refresh: 2, ../index.php');
    exit(json_encode($message));
  }
}
$message = "All files is uploaded";
exit(json_encode($message));
}