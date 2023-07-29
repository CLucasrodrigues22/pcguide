<?php

namespace App\Controllers;

// static resources
use MVC\Controller\Action;
use MVC\Model\Container;

class UsersController extends Action
{

    public function index()
    {
        try {
            $users = Container::getModel('Users');
            $getListUsers = $users->getAllUsers();
            http_response_code(200);
            echo json_encode($getListUsers);
        } catch (\PDOException $e) {
            $response = [
                "erro" => true,
                "messagem" => "Ocorreu o seguinte erro: " . $e
            ];
            http_response_code(500);
            echo json_encode($response);
        }
    }

    public function store()
    {
        try {
            $user = Container::getModel('Users');
            $storagePhoto = $this->storage($_FILES['photo'], 'storage/usersPhoto/', ['png', 'jpg', 'jpeg']);
            // Send user data received from form to model
            $user->__set('name', $_POST['name']);
            $user->__set('email', $_POST['email']);
            $user->__set('password', password_hash($_POST['password'], PASSWORD_DEFAULT));
            $user->__set('phone', $_POST['phone']);
            $user->__set('photo', $storagePhoto);
            $response = $user->create();
            http_response_code(201);
            echo json_encode($response);
        } catch (\PDOException $e) {
            $response = [
                "erro" => true,
                "messagem" => "Ocorreu o seguinte erro: " . $e
            ];
            http_response_code(500);
            echo json_encode($response);
        }
    }

    public function show()
    {
        try {
            $id = $_GET['id'];
            $user = Container::getModel('Users');
            $response = $user->showOnlyUser($id);
            http_response_code(200);
            echo json_encode($response);
        } catch (\PDOException $e) {
            $response = [
                "erro" => true,
                "messagem" => "Ocorreu o seguinte erro: " . $e
            ];
            http_response_code(500);
            echo json_encode($response);    
        }
    }

    public function update()
    {
        try {
            $id = $_GET['id'];
            $user = Container::getModel('Users');

            if ($_FILES['photo']['name'] != '') {
                // setting attribut photo with new file name
                $storagePhoto = $this->storage($_FILES['photo'], 'storage/usersPhoto/', ['png', 'jpg', 'jpeg']);
                $user->__set('photo', $storagePhoto);
            } else {
                //recovery current photo's name if $_FILES if empty
                $photoOld = $user->showOnlyUser($id);
                $user->__set('photo', $photoOld->photo);
            }

            $user->__set('name', $_POST['name']);
            $user->__set('email', $_POST['email']);
            $user->__set('phone', $_POST['phone']);
            $response = $user->update($id);
            http_response_code(200);
            echo json_encode($response);
        } catch (\PDOException $e) {
            $response = [
                "erro" => true,
                "messagem" => "Ocorreu o seguinte erro: " . $e
            ];
            http_response_code(500);
            echo json_encode($response);
        }
    }

    public function destroy()
    {
        try {
            $id = $_GET['id'];
            $user = Container::getModel('Users');

            $dir = 'storage/usersPhoto/';

            // Remove current photo
            $photoOld = $user->showOnlyUser($id);
            $path = $dir . $photoOld->photo;
            unlink($path);

            $response = $user->delete($id);
            http_response_code(200);
            echo json_encode($response);
        } catch (\PDOException $e) {
            $response = [
                "erro" => true,
                "messagem" => "Ocorreu o seguinte erro: " . $e
            ];
            http_response_code(500);
            echo json_encode($response);
        }
    }
}
