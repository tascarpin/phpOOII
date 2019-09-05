<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 23/08/2019
 * Time: 08:49
 */

namespace model;

trait Model
{
    public function criar($objeto){
        $query  = "INSERT INTO ";
        $query  .= $objeto->getTabela();
        $query .= " (".implode(", ", $objeto->getAtributos()) . ")";
        $query .= " VALUES";
        return $query .= " ('" .implode("', '", $objeto->getValores())."')";
    }

    public function listar($objeto, $condicao = array()) {
        $query  = "SELECT ";
        $query .= implode(", ", $objeto->getAtributos());
        $query .= " FROM " . $objeto->getTabela();
        $condicao != null? $query .= " WHERE " . implode(", ", array_values($condicao)):"";
        return $query;
    }

    public function editar($tabela, $atributos, $condicao){
        $query  = "UPDATE " . $tabela;
        $query .= " SET ";
        $query .= implode(", ", array_values($atributos));
        $query .= " WHERE ";
        return $query .= implode(", ", array_values($condicao));
    }

    public function deletar($tabela, $condicao = array()){
        $query  = "DELETE FROM " . $tabela;
        $condicao != null? $query .= " WHERE " . implode(", ", array_values($condicao)):"";
        return $query;
    }

}