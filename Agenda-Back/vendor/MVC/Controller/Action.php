<?php

namespace MVC\Controller;

use ArrayObject;
use Cake\Database\Type\StringType;

abstract class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    // renderiza o layout da aplicação passada por parametro no controller
    protected  function view($view, $layout)
    {
        $this->view->page = $view;

        //validando se o layout existe
        if (file_exists("../resources/layouts/" . $layout . ".phtml")) {
            require_once "../resources/layouts/" . $layout . ".phtml";
        } else {
            echo 'Layout não encontrado';
        }
    }

    // localiza e renderinza a view passada por parametro no controller
    protected function content()
    {   // $this->view('dir/view');
        require_once "../resources/views/" . $this->view->page . ".phtml";
    }

    protected function storage($filedata, $path, $extensions = ['png', 'jpg', 'jpeg', 'pdf'])
    {

        try {
            $file = explode('.', $filedata['name']);

            // get extension
            $extension = strtolower(end($file));

            if (array_search($extension, $extensions) === false) {
                $feedback = 'Extension not allowed';
                return $feedback;
            }
            // nome para ser salvo no banco de dados
            $nameFile = $path . md5($file[0]) . '-' . date('YmdHmi') . '.' . $extension;
            // // Verifica se é possível mover o arquivo para a pasta escolhida
            if (move_uploaded_file($filedata['tmp_name'], $nameFile)) {
                return $nameFile;
            } else {
                return $filedata["error"];
            }
        } catch (\Throwable $e) {
            $response = [
                "erro" => true,
                "messagem" => "Error: " . $e
            ];
            return $response;
        }
    }
}
