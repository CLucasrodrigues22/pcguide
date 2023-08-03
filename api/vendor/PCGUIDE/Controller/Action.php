<?php

namespace PCGUIDE\Controller;

abstract class Action
{
    // method for update file
    protected function storage($filedata, $path, $extensions)
    {
        try {
            $file = explode('.', $filedata['name']);

            // get extension
            $extension = strtolower(end($file));

            // check if extension is valid
            if (array_search($extension, $extensions) === false) {
                $feedback = 'Extension not allowed';
                return $feedback;
            }
            // nome para ser salvo no banco de dados
            $nameFile = $path . md5($file[0]) . '-' . date('YmdHmi') . '.' . $extension;
            // Verifica se é possível mover o arquivo para a pasta escolhida
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
