<?php 

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/film.php';

  $database = new Database();
  $db = $database->connect();

 
  $film = new film($db);

  $film->id = isset($_GET['id']) ? $_GET['id'] : die();

  $film->search_single();

  $film_arr = array(
    'id' => $film->id,
    'name' => $film->name,
    'genre' => $film->genre,
    'story' => $film->story
   
  );

  print_r(json_encode($film_arr));