<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 15/08/2019
 * Time: 19:25
 */

namespace model;

use controller\ProdutoController;

class Produto extends ProdutoController
{
    private $tabela = 'produto';
    private $atributos = array('nome', 'descricao',
        'precoCusto', 'precoVenda', 'fornecedor', 'tipo', 'status');
    private $valores;

    public function __construct($nome=null, $descricao=null, $precoCusto=null, $precoVenda=null,
                                $fornecedor=null, $tipo=null, $status=null)
    {
        $this->valores = [
            'nome'=>$nome,
            'descricao'=>$descricao,
            'precoCusto'=>$precoCusto,
            'precoVenda'=>$precoVenda,
            'fornecedor'=>$fornecedor,
            'tipo'=> $tipo,
            'status'=>$status
        ];
    }


    /**
     * @return string
     */
    public function getTabela()
    {
        return $this->tabela;
    }

    /**
     * @return array
     */
    public function getAtributos()
    {
        return $this->atributos;
    }

    /**
     * @return array
     */
    public function getValores()
    {
        return $this->valores;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}