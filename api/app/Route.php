<?php

namespace App;

use PCGUIDE\Init\Bootstrap;

class Route extends Bootstrap
{
    // function to init routs
    protected function initRoutes()
    {
        // Route form home app
        $routes['/home'] = array(
            'route' => '/home',
            'controller' => 'HomeController',
            'action' => 'index'
        );

        // Route to show all users
        $routes['/users'] = array(
            'route' => '/users',
            'controller' => 'UsersController',
            'action' => 'index'
        );

        // Route to create/save users data
        $routes['/createusers'] = array(
            'route' => '/createusers',
            'controller' => 'UsersController',
            'action' => 'store'
        );

        // Route to show user data by id
        $routes['/showuser'] = array(
            'route' => '/showuser',
            'controller' => 'UsersController',
            'action' => 'show'
        );

        // Route to update user data by id
        $routes['/updateuser'] = array(
            'route' => '/updateuser',
            'controller' => 'UsersController',
            'action' => 'update'
        );

        // Route to destroy user data by id
        $routes['/destroyuser'] = array(
            'route' => '/destroyuser',
            'controller' => 'UsersController',
            'action' => 'destroy'
        );

        $this->setRoutes($routes);
    }
}
