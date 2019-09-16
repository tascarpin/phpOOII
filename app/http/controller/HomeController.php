<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 05/09/2019
 * Time: 21:41
 */

namespace app\http\controller;

abstract class HomeController implements Controller
{
    public function index(){
        require('../resources/view/home/home.html');
    }

    public function criar()
    {
        return null;
    }

    public function editar()
    {
        return null;
    }

    public function listar(){
        require('../resources/view/home/listaProdutos.html');
    }

    public function deletar()
    {
        return null;
    }
}