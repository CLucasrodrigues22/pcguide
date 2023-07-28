<?php

namespace App;

use MVC\Init\Bootstrap;

class Route extends Bootstrap {

    // função para iniciar rotas
    protected function initRoutes() {
        
        // Rota exibição de todos os usuários
        $routes['/users'] = array (
            'route' => '/users',
            'controller' => 'UsersController',
            'action' => 'index'
        );

        // Rota criação de usuários
        $routes['/users'] = array (
            'route' => '/users',
            'controller' => 'UsersController',
            'action' => 'store'
        );

        $this->setRoutes($routes);
    }
}