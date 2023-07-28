<?php

namespace App\Controllers;

// recursos estáticos
use MVC\Controller\Action;
use MVC\Model\Container;

// Model
use App\Models\Users;

class UsersController extends Action{

    public function index() 
    {
        //Cabecalhos obrigatorios
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

        
    }

    public function store()
    {
        try {
            $user = Container::getModel('Users');
            // storage user photo

            // Send user data received from form to model
            $user->__set('name', $_POST['name']);
            $user->__set('email', $_POST['email']);
            $user->__set('password', password_hash($_POST['password'], PASSWORD_DEFAULT));
            $user->__set('phone', $_POST['phone']);
            //$user->__set('photo', $photoUrn);
            $response = $user->create();
            var_dump($response);
        } catch (\PDOException $e) {
            echo $e;
        }
    }
}