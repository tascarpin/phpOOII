<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 19:25
 */

namespace model;

class Produto
{
    private $idProduto;
    private $nome;
    private $descricao;
    private $precoCusto;
    private $precoVenda;
    private $fornecedor;
    private $tipo;
    private $status;

    public function __construct($nome, $descricao, $precoCusto, $precoVenda,
                                $fornecedor, $tipo, $status)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->precoCusto = $precoCusto;
        $this->precoVenda = $precoVenda;
        $this->tipo = $tipo;
        $this->status = $status;

        if(is_object($fornecedor)){
            $this->fornecedor = $fornecedor;
        }

    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return mixed
     */
    public function getPrecoCusto()
    {
        return $this->precoCusto;
    }

    /**
     * @return mixed
     */
    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    /**
     * @return mixed
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}