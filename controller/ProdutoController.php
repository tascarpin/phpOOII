<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 01/09/2019
 * Time: 19:36
 */

namespace controller;

use model\Model as Model;
use dataBase\Conexao as Conexao;
use model\Produto as Produto;

abstract class ProdutoController implements Controller
{
    public function index(){
//        header('Location: ../view/home/home.html');
//        echo "Index produto";
    }

    public function criar($produto){
        mysqli_query(Conexao::conectar(), Model::criar($produto));
        Conexao::desconectar();
    }

    public function listar($condicao = array()){
        return mysqli_fetch_all(mysqli_query(Conexao::conectar(),Model::listar( new Produto(), $condicao)));
        Conexao::desconectar();
    }

    public function editar($atributos = array(), $condicao = array()){
        mysqli_query(Conexao::conectar(), Model::editar('produto', $atributos, $condicao));
        Conexao::desconectar();
    }

    public function deletar($condicao = array()){
            mysqli_query(Conexao::conectar(),Model::deletar('produto', $condicao));
        Conexao::desconectar();
    }

}