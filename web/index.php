<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Frontal\HttpFoundation\Kernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\Routing\Matcher\UrlMatcher;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/../src/app.php';

$context = new RequestContext();
$matcher = new UrlMatcher($routes, $context);
$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$kernel = new Kernel($matcher, $controllerResolver, $argumentResolver);

$response = $kernel->handle($request);
$response->send();