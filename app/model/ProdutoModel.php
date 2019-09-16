<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/09/2019
 * Time: 16:22
 */

namespace app\model;
use app\model\entity\Produto as Produto;
include '../dataBase/entityManager.php';

abstract class ProdutoModel
{
    public function criar(){
        $produto = new Produto();
        $produto->setNome('TesteProduto');
        $entityManager = conexaoBandoDados();
        $entityManager->persist($produto);
        $entityManager->flush();
    }
}