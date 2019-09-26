<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 19:25
 */

namespace app\model\entity;

/**
 * @Entity
 * @Table(name="pedido")
 */
class Pedido
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $idPedido;
    /**
     * @Column(type="string", length=10, nullable=false)
     */
    private $codigo;
    /**
     * @Column(type="decimal", nullable=false, options={"default":0})
     */
    private $operadorCaixa;
    /**
     * @Column(type="decimal", nullable=false, options={"default":0})
     */
    private $desconto;
    /**
     * @Column(type="float", nullable=false, options={"default":0})
     */
    private $total;
    /**
     * @Column(type="string", length=10, nullable=false, options={"default":"DINHEIRO"})
     */
    private $pagamento;/**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * @param mixed $idPedido
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getOperadorCaixa()
    {
        return $this->operadorCaixa;
    }

    /**
     * @param mixed $operadorCaixa
     */
    public function setOperadorCaixa($operadorCaixa)
    {
        $this->operadorCaixa = $operadorCaixa;
    }

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @param mixed $desconto
     */
    public function setDesconto($desconto)
    {
        $this->desconto = $desconto;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * @param mixed $pagamento
     */
    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;
    }



}