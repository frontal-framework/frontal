<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class Controller
 * @package App\Controller
 * @author Kévin Dumont <kdumont@nodevo.com>
 */
class Controller
{

    public function indexAction($name)
    {
        return new Response("Hello je t'aime si fort mon $name d'amour");
    }
}