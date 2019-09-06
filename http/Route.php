<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/08/2019
 * Time: 19:57
 */

namespace http;
use controller\ProdutoController as ProdutoController;
use controller\HomeController as HomeController;

abstract class Route{

    public function put($recurso)
    {
        echo "put";
//        $recurso::listar();
    }

    public function post($recurso)
    {
        echo "post";
//        $recurso::post();
    }

    public function get($recurso)
    {
        ($recurso[0] == 'home')? HomeController::index():null;
        ($recurso[0] == 'produto')? ProdutoController::index():null;
    }

    public function delete($recurso)
    {
        echo "delete";
//        $recurso::delete();
    }
}


