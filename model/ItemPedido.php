<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 19:26
 */

namespace model;


class itemPedido
{
    private $idItemPedido;
    private $produto;
    private $pedido;
    private $quantidade;
    private $preco;
    private $dataVenda;
    private $subTotal;

    /**
     * itemPedido constructor.
     * @param $produto
     * @param $pedido
     * @param $quantidade
     * @param $preco
     * @param $dataVenda
     * @param $subTotal
     */
    public function __construct($produto, $pedido, $quantidade, $preco, $dataVenda, $subTotal)
    {
        $this->produto = $produto;
        $this->pedido = $pedido;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->dataVenda = $dataVenda;
        $this->subTotal = $subTotal;
    }

    /**
     * @return mixed
     */
    public function getIdItemPedido()
    {
        return $this->idItemPedido;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->produto;
    }

    /**
     * @return mixed
     */
    public function getPedido()
    {
        return $this->pedido;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @return mixed
     */
    public function getDataVenda()
    {
        return $this->dataVenda;
    }

    /**
     * @return mixed
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }



    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}