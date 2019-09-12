<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 05/09/2019
 * Time: 21:41
 */

namespace controller;

abstract class HomeController
{
    public function index(){
<<<<<<< Updated upstream
        echo "Index home";
//        return __DIR__  . "/../view/index.php";
=======
<<<<<<< Updated upstream
        require ('../resources/view/home/home.html');
=======
        echo "Index home";
//        $data = array('name' => 'Rob', 'age' => 40);
//        $payload = json_encode($data);
//
//        $response->getBody()->write($payload);
//        return $response
//            ->withHeader('Content-Type', 'application/json')
//            ->withStatus(201);
//        require ('../resources/view/home/home.html');
    }

    public function listar(){
        require ('../resources/view/home/listaProdutos.html');
    }

    public function sobre(){
        require ('../resources/view/home/sobre.html');
    }

    public function ajuda(){
        require ('../resources/view/home/ajuda.html');
    }

    public function login(){
        require ('../resources/view/home/login.html');
//         header('Location: login');
>>>>>>> Stashed changes
>>>>>>> Stashed changes
    }
}