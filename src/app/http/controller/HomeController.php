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
}