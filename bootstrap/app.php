<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 04/09/2019
 * Time: 10:40
 */

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use controller\HomeController as HomeController;

require "../vendor/autoload.php";

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

// Add route
$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/helloWorld', function (Request $request, Response $response) {
    $response->getBody()->write('Hello World');
    return $response;
});

$app->get('/', function ($request, $response, $args) {
    HomeController::index();
    return $response;
});
//
$app->get('/home', function ($request, $response, $args) {
    HomeController::index();
    return $response;
});

$app->run();

