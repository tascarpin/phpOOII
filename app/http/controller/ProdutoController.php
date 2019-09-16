<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 01/09/2019
 * Time: 19:36
 */

namespace app\http\controller;

use app\model\Model as Model;

abstract class ProdutoController implements Controller
{

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