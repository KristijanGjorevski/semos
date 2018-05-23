<?php 

  class Posts{

    function getAllPosts(){

      $posts = new PostsModel;
      $posts_return = $posts->getAllPosts();

      include "views/posts.php";
    }

    function getPost($id){

      $posts = new PostsModel;
      $posts_return = $posts->getPost($id);

      include "views/posts.php";
    }
  }



?>