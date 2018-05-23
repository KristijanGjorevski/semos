<?php
require_once 'controllers/general.php';

class usersModel extends General{

    function getAllUsers(){

        $sql = "SELECT * FROM users";
        $query = $this->db->query($sql);
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $users;
        // print_r($users);

    }

    function getUser(){

        $sql = "SELECT * FROM users";
        $query = $this->db->query($sql);
        $users = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $users;
        // print_r($users);

    }
}



?>