<?php
session_start();
require 'connection.php';
$data = [
  'name'=>$_POST['name'],
  'login'=>$_POST['login'],
  'pass'=>sha1($_POST['password'])
];
$fName= 'users.json';

// add user to mongoDB and to json file



if (!file_exists($fName)){
  file_put_contents($fName,json_encode($data));
}else {
  $oldContent = file_get_contents($fName);
  $tempData  = json_decode($oldContent);
  //check if more that one user in file
  if (is_array($tempData)){
    array_push($tempData,$data);
  }else{
    $tempData = array($tempData);
    array_push($tempData,$data);
  }
  $content = json_encode($tempData);
  file_put_contents($fName,$content);

}

// add user to mongoDB

$users = $db->users;
$cursor = $users->find();
$users->insertOne($data);

