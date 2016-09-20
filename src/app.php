<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', array(
    'name' => 'World',
    '_controller' => 'App\Controllers\Controller::indexAction',
)));

return $routes;