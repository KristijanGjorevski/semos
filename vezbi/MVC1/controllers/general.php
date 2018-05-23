<?php 

class General{
  public $db;

  function __construct(){
    
    $config = file_get_contents("config.json");
    $decoded = json_decode($config);

    // se podsetiv za kako od JSON decode do konekcija!
    $connection_strng = $decoded->database->config;
    $connection_username = $decoded->database->username;
    $connectiron_password = $decoded->database->password;

    $this->db = new PDO($connection_strng,$connection_username,$connectiron_password);

  }
}

?>