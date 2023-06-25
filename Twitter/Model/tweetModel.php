<?php

Class MyDataBase {

    private $pdo;
        public function connect_to_db()
        {
            try
            {
                    $bdd = 'mysql:dbname=“common-
                    database.sql;host=localhost';
                    $user = 'root';
                    $password = '10fevrier';
    
                    $this->pdo = new PDO($bdd, $user, $password);
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }
        }
}    
class Tweet {
  private $id;
  private $userId;
  private $message;
  private $images;
  private $origin;
  private $comments;
  private $likedId;

  public function __construct($userId, $message, $images, $origin, $comments, $likedId) {
    $this->userId = $userId;
    $this->message = $message;
    $this->images = $images;
    $this->origin = $origin;
    $this->comments = $comments;
    $this->likedId = $likedId;
  }

  public function getId() {
    return $this->id;
  }

  public function getUserId() {
    return $this->userId;
  }

  public function getMessage() {
    return $this->message;
  }

  public function getImages() {
    return $this->images;
  }

  public function getOrigin() {
    return $this->origin;
  }

  public function getComments() {
    return $this->comments;
  }

  public function getLikedId() {
    return $this->likedId;
  }

  public function save() {
 
  }
}
