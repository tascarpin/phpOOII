<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 01/09/2019
 * Time: 17:19
 */

namespace controller;

interface Controller
{
    public function index();
    public function listar();
    public function criar($objeto);
    public function editar();
    public function deletar();
}