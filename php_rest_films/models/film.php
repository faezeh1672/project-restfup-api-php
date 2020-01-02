<?php 
  class film {
    
    private $conn;
    private $table = 'film';
    // Film Properties
    public $id;
    public $name;
    public $genre;
    public $story;
    public function __construct($db) {
      $this->conn = $db;
    }
    // Get Films
    public function read() {
      $query = 'SELECT 
      *                      
       FROM film  ' ;
      
      $stmt = $this->conn->prepare($query);
      $stmt->execute();
      return $stmt;
    }
    // Get Single Film
    public function search_single() {
          
          $query = 'SELECT
           id,
           name,
           genre,
           story
           FROM films.film
           WHERE
            id = ? ';
          $stmt = $this->conn->prepare($query);
          $stmt->bindParam(1, $this->id);
          $stmt->execute();
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
          $this->id = $row['id'];
          $this->name = $row['name'];
          $this->genre = $row['genre'];
          $this->story = $row['story'];
      
    }

   // Create Film
    public function create() {
          $query = 'INSERT INTO ' . $this->table . ' SET name = :name, genre = :genre, story = :story';
          $stmt = $this->conn->prepare($query);
          $this->name= htmlspecialchars(strip_tags($this->name));
          $this->genre = htmlspecialchars(strip_tags($this->genre));
          $this->story = htmlspecialchars(strip_tags($this->story));
          $stmt->bindParam(':name', $this->name);
          $stmt->bindParam(':genre', $this->genre);
          $stmt->bindParam(':story', $this->story);
          if($stmt->execute()) {
            return true;
      }
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    // Update Information of a Film
    public function update() {
       
          $query = 'UPDATE ' . $this->table . '
                                SET name = :name, genre = :genre, story = :story
                                WHERE id = :id';

     
          $stmt = $this->conn->prepare($query);
          $this->name= htmlspecialchars(strip_tags($this->name));
          $this->genre = htmlspecialchars(strip_tags($this->genre));
          $this->story = htmlspecialchars(strip_tags($this->story));
          $stmt->bindParam(':name', $this->name);
          $stmt->bindParam(':genre', $this->genre);
          $stmt->bindParam(':story', $this->story);
          $stmt->bindParam(':id', $this->id);
          if($stmt->execute()) {
            return true;
          }
          printf("Error: %s.\n", $stmt->error);
          return false;
    }
    // Delete Film
    public function delete() {
      
          $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
          $stmt = $this->conn->prepare($query);
          $this->id = htmlspecialchars(strip_tags($this->id));
          $stmt->bindParam(':id', $this->id);
          if($stmt->execute()) {
            return true;
          }
          printf("Error: %s.\n", $stmt->error);
          return false;
    }
    
  }