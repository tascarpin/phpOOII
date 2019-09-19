<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/09/2019
 * Time: 16:22
 */

namespace app\model;
use app\model\entity\Produto as Produto;
use Doctrine\ORM\ORMException;

abstract class ProdutoModel
{
    private static $path = 'app\model\entity\Produto';

    public function criar(){
        $produto = new Produto();
        $produto->setNome('Coca-cola');
        $em = getEntityManager();
        try {
            $em->persist($produto);
            $em->flush();
            exit("Produto cadastrado com sucesso.");
        } catch (ORMException $e) {
            $e->metadataCacheNotConfigured();
            exit("Falha ao criar produto.");
        }
    }

    public function editar($id){
        $em = getEntityManager();
        $produto = null;
        try{
            $produto = $em->find(self::$path, $id);
            $produto->setNome($_GET['nome']);
            $produto->setDescricao($_GET['descricao']);
            $produto->setPrecoCusto($_GET['precoCusto']);
            $produto->setprecoVenda($_GET['precoVenda']);
            $produto->setFornecedor($_GET['fornecedor']);
            $produto->setTipo($_GET['tipo']);
            $produto->setStatus($_GET['status']);
            $em->flush();
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($produto === null) {
            exit("Produto $id não existe.\n");
        }
    }

    public function alterar($id, $response){
        $em = getEntityManager();
        $produto = null;
        try{
            $produto = $em->find(self::$path, $id);
            if(isset($_GET['nome'])){$produto->setNome($_GET['nome']);}
            if(isset($_GET['descricao'])){$produto->setDescricao($_GET['descricao']);}
            if(isset($_GET['precoCusto'])){$produto->setPrecoCusto($_GET['precoCusto']);}
            if(isset($_GET['precoVenda'])){$produto->setprecoVenda($_GET['precoVenda']);}
            if(isset($_GET['fornecedor'])){$produto->setFornecedor($_GET['fornecedor']);}
            if(isset($_GET['tipo'])){$produto->setTipo($_GET['tipo']);}
            if(isset($_GET['status'])){$produto->setStatus($_GET['status']);}
            $em->flush();
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($produto === null) {
            exit("Produto $id não existe.\n");
        }
    }

    public function listar(){
        $em = getEntityManager();
        $productRepository = $em->getRepository(self::$path);
        $produtos = $productRepository->findAll();
        header('Content-Type: application/json');
        foreach ($produtos as $produto) {
//            echo json_encode($produto);
            echo sprintf(
                "Id:%s<br>Produto:%s<br>Descrição:%s<br>Preço de Custo:%s<br>Preço de Venda:%s<br>
                Fornecedor:%s<br>Tipo:%s<br>Status:%s<br>",$produto->getIdProduto(), $produto->getNome(),
                $produto->getDescricao(), $produto->getPrecoCusto(),$produto->getPrecoVenda(),
                $produto->getFornecedor(),$produto->getTipo(), $produto->getStatus());
            echo "----------------------------------<br>";
        }
    }

    public function procurar($id){
        $em = getEntityManager();
        $produto = $em->find(self::$path, $id);

        if ($produto === null) {
            exit("Produto não encontrado.");
        }

        echo sprintf(
            "Id:%s<br>Produto:%s<br>Descrição:%s<br>Preço de Custo:%s<br>Preço de Venda:%s<br>
                Fornecedor:%s<br>Tipo:%s<br>Status:%s<br>",$produto->getIdProduto(), $produto->getNome(),
                $produto->getDescricao(), $produto->getPrecoCusto(),$produto->getPrecoVenda(),
                $produto->getFornecedor(),$produto->getTipo(), $produto->getStatus());
        echo "----------------------------------<br>";
    }

    public function deletar($id = 5){
        $em = getEntityManager();
        $produto = null;
        try{
            $produto = $em->find(self::$path, $id);
            $em->remove($produto);
            $em->flush();
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($produto === null) {
            exit("Produto $id não existe.\n");
        }
    }
}