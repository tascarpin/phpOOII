<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 14/09/2019
 * Time: 11:10
 */

namespace app\model\entity;

/**
 * @Entity
 * @Table(name="produto")
 */
class Produto
{
    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    private $idProduto;
    /**
     * @Column(type="string", length=50, nullable=false)
     */
    private $nome;
    /**
     * @Column(type="string", length=150, options={"default":null})
     */
    private $descricao;
    /**
     * @Column(type="float", nullable=false, options={"default":0})
     */
    private $precoCusto;
    /**
     * @Column(type="float", nullable=false, options={"default":0})
     */
    private $precoVenda;
    /**
     * @Column(type="string", length=50, nullable=false, options={"default":"Fornecedor"})
     */
    private $fornecedor;
    /**
     * @Column(type="string", length=15, nullable=false, options={"default":"Tipo"})
     */
    private $tipo;
    /**
     * @Column(type="string", length=50, nullable=false, options={"default":"ATIVO"})
     */
    private $status;

    /**
     * @return mixed
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getPrecoCusto()
    {
        return $this->precoCusto;
    }

    /**
     * @param mixed $precoCusto
     */
    public function setPrecoCusto($precoCusto)
    {
        $this->precoCusto = $precoCusto;
    }

    /**
     * @return mixed
     */
    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    /**
     * @param mixed $precoVenda
     */
    public function setPrecoVenda($precoVenda)
    {
        $this->precoVenda = $precoVenda;
    }

    /**
     * @return mixed
     */
    public function getFornecedor()
    {
        return $this->fornecedor;
    }

    /**
     * @param mixed $fornecedor
     */
    public function setFornecedor($fornecedor)
    {
        $this->fornecedor = $fornecedor;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

}