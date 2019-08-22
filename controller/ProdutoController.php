<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 22/08/2019
 * Time: 18:39
 */

namespace controller;

class ProdutoController{

    public function criar(){
        try
        {
            $this->con->connect()->exec("INSERT INTO pessoa (nome,sobrenome) VALUES ($valores)");
        }
        catch (PDOExcepetion $e)
        {
            echo "Erro!: ".$e->getMessage()." \n";
        }
    }

    public function editar(){

    }

    public function procurar(){

    }

    public function atualizar(){
        try
        {
            $this->con->connect()->exec("UPDATE pessoa SET $camposvalores WHERE $where");
        }
        catch (PDOExcepetion $e)
        {
            echo "Erro!: ".$e->getMessage()." \n";
        }
    }

    public function deletar(){
        try
        {
            $this->con->connect()->exec("DELETE FROM pessoa WHERE id = $id");
        }
        catch (PDOExcepetion $e)
        {
            echo "Erro!: ".$e->getMessage()." \n";
        }
    }
}