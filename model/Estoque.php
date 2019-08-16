<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 20:49
 */

namespace model;


class Estoque
{
    private $idPoduto;
    private $quantidade;
    private $minimo;
    private $maximo;

    /**
     * @return mixed
     */
    public function getIdPoduto()
    {
        return $this->idPoduto;
    }

    /**
     * @param mixed $idPoduto
     */
    public function setIdPoduto($idPoduto)
    {
        $this->idPoduto = $idPoduto;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return mixed
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * @param mixed $minimo
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;
    }

    /**
     * @return mixed
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * @param mixed $maximo
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;
    }

}