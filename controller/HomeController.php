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
        echo "Index home";
//        return __DIR__  . "/../view/index.php";
    }
}