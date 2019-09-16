<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 20:21
 */

namespace app\model;


class Fornecedor
{
    private $idFornecedor;
    private $nomeFantasia;
    private $razaoSocial;
    private $CNPJ;
    private $endereco;
    private $email;
    private $telefone;

    /**
     * Fornecedor constructor.
     * @param $idFornecedor
     * @param $nomeFantasia
     * @param $razaoSocial
     * @param $CNPJ
     * @param $endereco
     * @param $email
     * @param $telefone
     */
    public function __construct($nomeFantasia, $razaoSocial, $CNPJ, $endereco, $email, $telefone)
    {
        $this->nomeFantasia = $nomeFantasia;
        $this->razaoSocial = $razaoSocial;
        $this->CNPJ = $CNPJ;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    /**
     * @return mixed
     */
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @return mixed
     */
    public function getCNPJ()
    {
        return $this->CNPJ;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}