<?php 
 
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/film.php';

  $database = new Database();
  $db = $database->connect();

  $film = new film($db);

  
  $result = $film->read();

  $num = $result->rowCount();


  if($num > 0) {
  
    $films_arr = array();
   

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $film_item = array(
        'id' => $id,
        'name' => $name,
        'genre' => $genre,
        'story' => $story
       
      );

    
      array_push($films_arr, $film_item);
      
    }

   
    echo json_encode($films_arr);

  } else {
   
    echo json_encode(
      array('message' => 'No films Found')
    );
  }
