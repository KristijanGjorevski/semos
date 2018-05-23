<?php 

  if(isset($_GET["params"])){

    $cells = explode("/",$_GET["params"]);

    switch (count($cells)) {
        case 0:
            $controller_name = "posts";
            $method_name = "getAllPosts";
            $input = "";
        break;
        case 1:
            $controller_name = $cells[0];
            $method_name = "getAllPosts";
            $input = "";
        break;
        case 2:
            $controller_name = $cells[0];
            $method_name = $cells[1];
            $input = "";
        break;
        case 3:
            $controller_name = $cells[0];
            $method_name = $cells[1];
            $input = $cells[2];
        break;
      
        default:
            echo "too many posts";
          break;
    }
  }

  $filename_c = "controllers/{$controller_name}.php";
  $filename_m = "models/{$controller_name}.php";

  if (file_exists($filename_c) && file_exists($filename_m)) {
    
    include ($filename_c);
    include ($filename_m);

    $object = new $controller_name;

    //proverka dali postoi metodata
    if(method_exists($object,$method_name)){

      $object->$method_name($input);

    }
  }

  // echo "<pre>"; print_r($object); echo "</pre>";


?>