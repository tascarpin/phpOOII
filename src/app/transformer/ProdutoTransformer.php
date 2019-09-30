<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 27/09/2019
 * Time: 15:32
 */

namespace app\transformer;

use League\Fractal\TransformerAbstract;
use app\model\entity\Produto as Produto;

class ProdutoTransformer extends TransformerAbstract
{
    public function transform(Produto $produto){
        return [
            'id' => (int)$produto->getIdProduto(),
            'nome' => $produto->getNome(),
            'descrição' => (int)$produto->getDescricao()
        ];
    }
}