<?php
//require "vendor/autoload.php";
require 'connection.php';
//connect to db
$db = $client->sample_restaurants;
//choose collection
$collection = $db->restaurants;
//get all locations
$set = $collection->distinct('borough');
//get location from ajax
$location = json_decode(file_get_contents('php://input'), TRUE);

if ($location) {
  //define cursor
  $rest = $collection->find(['borough' => $location]);
  //make array of restaurants names
  foreach ($rest as $restaurant) {
    if ($restaurant['name'] != '') {
      $array[] = $restaurant['name'];
    }
  }
  //forming response
  if ($array) {
    echo json_encode(
      $array,
      JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP
    );
  }
  else {
    http_response_code(204);
  }
  exit();
}



