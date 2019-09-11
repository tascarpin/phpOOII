<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 06/09/2019
 * Time: 15:44
 */

global $_ROTAS;

$_ROTAS = array(
    '/' => array(
        'controller' => \controller\HomeController::class,
        'funcao' => 'index'
    ),
    'home' =>array(
        'controller' => \controller\HomeController::class,
        'funcao' => 'index'
    ),
    'listaProdutos' => array(
        'controller' => \controller\HomeController::class,
        'funcao' => 'listar'
    ),
    'sobre' => array(
        'controller' => \controller\HomeController::class,
        'funcao' => 'sobre'
    ),
    'ajuda' => array(
        'controller' => \controller\HomeController::class,
        'funcao' => 'ajuda'
    ),
    'login' => array(
        'controller' => \controller\HomeController::class,
        'funcao' => 'login'
    ),
    'produto' =>array(
        'controller' => 'ProdutoController',
        'funcao' => 'index'
    )
);