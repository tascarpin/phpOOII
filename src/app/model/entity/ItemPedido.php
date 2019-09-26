<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 19:26
 */

namespace app\model\entity;

/**
 * @Entity
 * @Table(name="itemPedido")
 */
class itemPedido
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $idItemPedido;
    /**
     * @ManyToOne(targetEntity="produto")
     * @JoinColumn(name="produto_id", referencedColumnName="idProduto")
     */
    private $produto_id;
    /**
     * @ManyToOne(targetEntity="pedido")
     * @JoinColumn(name="pedido_id", referencedColumnName="idPedido")
     */
    private $pedido_id;
    /**
     * @Column(type="integer", nullable=false)
     */
    private $quantidade;
    /**
     * @Column(type="float", nullable=false)
     */
    private $preco;
    /**
     * @Column(type="date", nullable=false)
     */
    private $dataVenda;
    /**
     * @Column(type="float", nullable=false)
     */
    private $subTotal;

}