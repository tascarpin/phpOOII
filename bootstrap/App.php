<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 04/09/2019
 * Time: 10:40
 */

use http\Route as Route;

abstract class App
{
    private static $response;

    public function response(){
        return self::$response;
    }

    public function request(){
        $metodo = $_SERVER['REQUEST_METHOD'];
        $recurso = explode("/", substr(@$_SERVER['REQUEST_URI'], 1));
        switch ($metodo ) {
            case 'PUT':
                Route::put($recurso);
                break;
            case 'POST':
                Route::post($recurso);
                break;
            case 'GET':
                Route::get($recurso);
                break;
            case 'DELETE':
                Route::delete($recurso);
                break;
            default:
                header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
                die('{"msg": "Método não encontrado."}');
                break;
        }
    }
}

App::request();
App::response();
