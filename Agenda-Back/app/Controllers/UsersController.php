<?php

namespace App\Controllers;

// recursos estáticos
use MVC\Controller\Action;
use MVC\Model\Container;

class UsersController extends Action
{

    public function index()
    {
        try {
            $users = Container::getModel('Users');
            $getListUsers = $users->getAllUsers();
            var_dump($getListUsers);
        } catch (\PDOException $e) {
            echo $e;
        }
    }

    public function store()
    {
        try {
            $user = Container::getModel('Users');
            // storage user photo
            $upload['directory'] = 'storage/usersPhoto/';
            $upload['extensions'] = ['png', 'jpg', 'jpeg'];

            $upload['erros'][0] = 'Não houve erro';
            $upload['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
            $upload['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
            $upload['erros'][3] = 'O upload do arquivo foi feito parcialmente';
            $upload['erros'][4] = 'Não foi feito o upload do arquivo';

            if ($_FILES['photo']['error'] === 0) {

                // Dividindo o nome do nome da imagem (imagem . extensão)
                $photo = explode('.', $_FILES['photo']['name']);
                // Pegando a extensão da imagem
                $extension = strtolower(end($photo));
                // Validando Extensão
                if (array_search($extension, $upload['extensions']) === false) { // percorre array de $upload
                    // se tiver erro >
                    $feedback = 'Só é aceito imagem com extensão png';
                    header("Location: /createusers?feedback=$feedback");
                    exit;
                }
                // nome para ser salvo no banco de dados
                $namePhoto = md5($photo[0]) . '-' . date('YmdHmi') . '.' . $extension;

                // Verifica se é possível mover o arquivo para a pasta escolhida
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload['directory'] . $namePhoto)) {
                    $user->__set('photo', $namePhoto);
                } else {
                    echo 'Ocorreu o seguinte erro' . $upload['erros'][$_FILES['photo']['error']];
                }
            }
            // Send user data received from form to model
            $user->__set('name', $_POST['name']);
            $user->__set('email', $_POST['email']);
            $user->__set('password', password_hash($_POST['password'], PASSWORD_DEFAULT));
            $user->__set('phone', $_POST['phone']);
            $response = $user->create();
            var_dump($response);
        } catch (\PDOException $e) {
            echo $e;
        }
    }

    public function show()
    {
        try {
            $id = $_GET['id'];
            $user = Container::getModel('Users');
            $dataUser = $user->showOnlyUser($id);
            var_dump($dataUser);
        } catch (\PDOException $e) {
            echo $e;
        }
    }

    public function update()
    {
        try {
            $id = $_GET['id'];
            $user = Container::getModel('Users');
            $upload['directory'] = 'storage/usersPhoto/';
            $upload['extensions'] = ['png', 'jpg'];

            $upload['erros'][0] = 'Não houve erro';
            $upload['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
            $upload['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
            $upload['erros'][3] = 'O upload do arquivo foi feito parcialmente';


            if ($_FILES['photo']['error'] === 0 && $_FILES['photo']['name'] != '') {

                // Remove current photo
                $photoOld = $user->showOnlyUser($id);
                $path = $upload['directory'] . $photoOld->photo;
                unlink($path);

                $photo = explode('.', $_FILES['photo']['name']);

                // get photo extension
                $extension = strtolower(end($photo));

                // validate extension
                if (array_search($extension, $upload['extensions']) === false) { // percorre array de $upload
                    // if has erro >
                    $feedback = 'Só é aceito imagem com extensão png';
                    header("Location: /users?feedback=$feedback");
                    exit;
                }

                // photo's name with md5 e date
                $namePhoto = md5($photo[0]) . '-' . date('YmdHmi') . '.' . $extension;

                // validating and moving file to directory
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload['directory'] . $namePhoto)) {
                    $user->__set('photo', $namePhoto);
                }
            } else {
                //recovery current photo's name if $_FILES if empty
                $photoOld = $user->showOnlyUser($id);
                $user->__set('photo', $photoOld->photo);
            }

            $user->__set('name', $_POST['name']);
            $user->__set('email', $_POST['email']);
            $user->__set('phone', $_POST['phone']);
            $user->update($id);
        } catch (\PDOException $e) {
            echo $e;
        }
    }
}
