<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 19:25
 */

namespace app\model;

class Pedido
{
    private $idPedido;
    private $codigo;
    private $operadorCaixa;
    private $desconto;
    private $total;
    private $pagamento;

    /**
     * pedido constructor.
     * @param $codigo
     * @param $operadorCaixa
     * @param $desconto
     * @param $total
     * @param $pagamento
     */
    public function __construct($codigo, $operadorCaixa, $desconto, $total, $pagamento)
    {
        $this->codigo = $codigo;
        $this->operadorCaixa = $operadorCaixa;
        $this->desconto = $desconto;
        $this->total = $total;
        $this->pagamento = $pagamento;
    }

    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @return mixed
     */
    public function getOperadorCaixa()
    {
        return $this->operadorCaixa;
    }

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return mixed
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }



    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}