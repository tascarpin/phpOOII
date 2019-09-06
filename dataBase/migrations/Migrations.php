<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 03/09/2019
 * Time: 13:35
 */

namespace dataBase\migrations;

use dataBase\Conexao as Conexao;

trait Migrations
{
    public function criarTabelas()
    {

        $conexao = Conexao::conectar();
            mysqli_query($conexao,self::produto());
            mysqli_query($conexao,self::pedido());
        Conexao::desconectar($conexao);
    }

    public function produto(){

        return $query = "CREATE TABLE `produto` (
                        `idProduto` int(11) NOT NULL AUTO_INCREMENT,
                        `nome` varchar(50) NOT NULL,
                        `descricao` varchar(150) DEFAULT NULL,
                        `precoCusto` float NOT NULL,
                        `precoVenda` float NOT NULL,
                        `fornecedor` varchar(50) DEFAULT NULL,
                        `tipo` varchar(15) DEFAULT NULL,
                        `status` enum('ATIVO','INATIVO') NOT NULL DEFAULT 'ATIVO',
                        PRIMARY KEY (`idProduto`)
                    ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;";
    }

    public function pedido(){
        return $query = "CREATE TABLE `pedido` (
                        `idPedido` int(11) NOT NULL AUTO_INCREMENT,
                        `codigo` varchar(10) NOT NULL,
                        `idOperadorCaixa` int(11) NOT NULL,
                        `desconto` float DEFAULT NULL,
                        `total` float NOT NULL,
                        `idPagamento` int(11) NOT NULL,
                        PRIMARY KEY (`idPedido`)
                  ) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;";
    }
}