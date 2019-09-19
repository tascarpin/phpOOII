<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 17:33
 */

use app\http\controller\HomeController as HomeController;
use app\model\ProdutoModel as ProdutoModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

// Add route
$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->get('/', function ($request, $response, $args) {
    HomeController::index();
    return $response;
});

$app->get('/home', function ($request, $response, $args) {
    HomeController::index();
    return $response;
});

$app->post('/produto', function ($request, $response, $args) {
    ProdutoModel::criar();
    return $response;
});

$app->put('/produto', function ($request, $response, $args) {
    ProdutoModel::listar();
    return $response;
});

$app->put('/produto/{id}', function ($request, $response, $args) {
    ProdutoModel::editar($args['id']);
    return $response;
});

$app->patch('/produto/{id}', function ($request, $response, $args) {
    ProdutoModel::alterar($args['id'], $request);
    return $response;
});

$app->get('/produto/{id}', function ($request, $response, $args) {
    ProdutoModel::procurar($args['id']);
    return $response;
});

$app->delete('/produto/{id}', function ($request, $response, $args) {
    ProdutoModel::deletar($args['id']);
    return $response;
});