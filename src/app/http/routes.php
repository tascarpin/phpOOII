<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 17:33
 */

use app\http\controller\HomeController as HomeController;
use app\model\ProdutoModel as ProdutoModel;
use app\model\PedidoModel as PedidoModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy as RouteCollectorProxy;

// Add route
$app->get('/', function ($request, $response, $args) {
    HomeController::index();
    return $response;
});

$app->get('/home', function ($request, $response, $args) {
    HomeController::index();
    return $response;
});

$app->group('/produto', function (RouteCollectorProxy $group) {
    //Action index de produto
    $group->get('/index', function ($request, $response, $args) {
        echo 'index';
        return $response;
    });

    //Action view Produto
    $group->get('/create', function ($request, $response, $args) {
        echo 'VIEW produto.criar';
        return $response;
    });

    //Action armazenar produto
    $group->post('/store', function ($request, $response, $args) {
        ProdutoModel::store();
        return $response;
    });
    //Action mostrar um produto
    $group->get('/show/{id}', function ($request, $response, $args) {
        ProdutoModel::show($args['id']);
        return $response;
    });

    //Action editar produto
    $group->get('/{id}/edit', function ($request, $response, $args) {
        ProdutoModel::edit($args['id']);
        return $response;
    });

    //Action atualizar produto
    $group->patch('/produto/{id}', function ($request, $response, $args) {
        ProdutoModel::update($args['id']);
        return $response;
    });

    //Action listar todos os produtos
    $group->put('/listAll', function ($request, $response, $args) {
        ProdutoModel::listAll();
        return $response;
    });

    //Action deletar produto
    $group->delete('/produto/{id}', function ($request, $response, $args) {
        ProdutoModel::destroy($args['id']);
        return $response;
    });
});

$app->group('/pedido', function (RouteCollectorProxy $group) {
    //Action listar todos os pedidos
    $group->put('/listAll', function ($request, $response, $args) {
        PedidoModel::listAll();
        return $response;
    });
});

