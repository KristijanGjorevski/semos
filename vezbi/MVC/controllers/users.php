<?php

class Users {

    function getUsers(){
        $usersModel = new usersModel();
        $users = $usersModel->getAllUsers();
        include "view/users.php";
    }

    function getUser(){
        $usersModel = new usersModel();
        $users = $usersModel->getUser();
        include "view/users.php";
    }


}



?>