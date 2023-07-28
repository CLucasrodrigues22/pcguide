<?php

namespace App\Controllers;

// recursos estáticos
use MVC\Controller\Action;
use MVC\Model\Container;

// Model
use App\Models\Users;

class UsersController extends Action
{

    public function index()
    {
    }

    public function store()
    {
        try {
            $user = Container::getModel('Users');
            // storage user photo
            $upload['diretorio'] = 'storage/usersPhoto/';
            $upload['extensoes'] = ['png', 'jpg', 'jpeg'];

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
                if (array_search($extension, $upload['extensoes']) === false) { // percorre array de $upload
                    // se tiver erro >
                    $feedback = 'Só é aceito imagem com extensão png';
                    header("Location: /createusers?feedback=$feedback");
                    exit;
                }
                // nome para ser salvo no banco de dados
                $namePhoto = md5($photo[0]) . '-' . date('YmdHmi') . '.' . $extension;

                // Verifica se é possível mover o arquivo para a pasta escolhida
                if (move_uploaded_file($_FILES['photo']['tmp_name'], $upload['diretorio'] . $namePhoto)) {
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
}
