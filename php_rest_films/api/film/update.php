<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, storyization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/film.php';


  $database = new Database();
  $db = $database->connect();


  $film = new film($db);


  $data = json_decode(file_get_contents("php://input"));

 
  $film->id = $data->id;
  $film->name = $data->name;
  $film->genre = $data->genre;
  $film->story = $data->story;
 
  
  if($film->update()) {
    echo json_encode(
      array('message' => 'film Updated')
    );
  } else {
    echo json_encode(
      array('message' => 'film Not Updated')
    );
  }

