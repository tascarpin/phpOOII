<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 23/08/2019
 * Time: 08:49
 */

namespace model;

use dataBase\Conexao as Conexao;

abstract class Model
{
    public function criar($objeto){
        $query  = "INSERT INTO produto";
        $query .= " (`".implode("`, `", array_keys(get_object_vars($objeto)))."`)";
        $query .= " VALUES ('";
        $query .= implode("', '", (array)$objeto)."') ";

        $conexao = Conexao::conectar();
            mysqli_query($conexao,$query);
        Conexao::desconectar($conexao);
    }

    public function ler($tabela, $parametro){
        $query  = "SELECT";
        $query .= " (`".implode("`, `", array_keys($parametro))."`)";
        $query .= " FROM " . $tabela;

        var_dump($query);

//        $conexao = Conexao::conectar();
//            return mysqli_fetch_all(mysqli_query($conexao,$query));
//        Conexao::desconectar($conexao);
    }

}