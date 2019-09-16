<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 01/09/2019
 * Time: 17:19
 */

namespace app\http\controller;

interface Controller
{
    public function index();
    public function listar();
    public function criar();
    public function editar();
    public function deletar();
}