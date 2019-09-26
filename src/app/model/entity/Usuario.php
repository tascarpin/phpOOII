<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 20:49
 */

namespace app\model;


class Usuario
{
    private $nome;
    private $email;
    private $telefone;
    private $endereco;

    /**
     * Usuario constructor.
     * @param $nome
     * @param $email
     * @param $telefone
     * @param $endereco
     */
    public function __construct($nome, $email, $telefone, $endereco)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
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

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

}