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
        require ('../resources/view/home/home.html');
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
     }
}