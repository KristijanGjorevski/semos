<?php 

  include "controllers/general.php";

class PostsModel extends General {

  function getAllPosts(){
      
    $sql = "SELECT * FROM posts";

    $query = $this->db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

      return $result;
  }

  function getPost($post_id){

    $sql = "SELECT * FROM posts WHERE id=:id";

    $query = $this->db->prepare($sql);
    $query->bindValue(":id",$post_id,PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

      return $result;
  }
}


?>