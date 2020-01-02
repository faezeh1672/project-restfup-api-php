<?php 
  
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/film.php';


  $database = new Database();
  $db = $database->connect();


  $film = new film($db);

 
  $data = json_decode(file_get_contents("php://input"));


  $film->id = $data->id;

  if($film->delete()) {
    echo json_encode(
      array('message' => 'film Deleted')
    );
  } else {
    echo json_encode(
      array('message' => 'film Not Deleted')
    );
  }

