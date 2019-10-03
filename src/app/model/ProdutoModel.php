<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/09/2019
 * Time: 16:22
 */

namespace app\model;

use app\model\entity\Produto as Produto;
use app\transformer\ProdutoTransformer as ProdutoTransformer;
use League\Fractal\Resource\Collection as Collection;
use League\Fractal\Resource\Item as Item;
use League\Fractal\Serializer\JsonApiSerializer as JsonApiSerializer;
use League\Fractal\Manager;
use Doctrine\ORM\ORMException;


abstract class ProdutoModel
{
    public function store(){
        $produto = new Produto();
        self::setAtributos($produto);
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

    public function edit($id){
        $em = getEntityManager();
        $produto = null;
        try{
            $produto = $em->find(Produto::class, $id);
            self::setAtributos($produto);
            $em->flush();
            exit("Produto editado com sucesso.\n");
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($produto === null) {
            exit("Produto $id não existe.\n");
        }
    }

    public function update($id){
        $em = getEntityManager();
        $produto = null;
        try{
            $produto = $em->find(Produto::class, $id);
            self::setAtributos($produto);
            $em->flush();
            exit("Produto atualizado com sucesso.\n");
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($produto === null) {
            exit("Produto $id não existe.\n");
        }
    }

    /**
     * @param $id
     * @return Item|null|object
     * @throws ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     * @throws \Doctrine\ORM\TransactionRequiredException
     */
    public function show($id){
        $em = getEntityManager();
        $produto = null;
        $produto = $em->find(Produto::class, $id);
        //Transforma em JSON
        ($produto === null)? exit("Produto não encontrado."):
            $fractal = new Manager();
            $fractal->setSerializer(new JsonApiSerializer());
            $produto = new Item($produto, new ProdutoTransformer(), 'produto');
            echo $fractal->createData($produto)->toJson();
    }

    public function list(){
        $em = getEntityManager();
        $produtoRepository = $em->getRepository(Produto::class);
        $produtos = $produtoRepository->findAll();
        // Transforma em JSON
        $fractal = new Manager();
        $fractal->setSerializer(new JsonApiSerializer());
        $produtos = new Collection($produtos, new ProdutoTransformer(), 'produto');
        echo $fractal->createData($produtos)->toJson();
    }

    public function destroy($id = 5){
        $em = getEntityManager();
        $produto = null;
        try{
            $produto = $em->find(Produto::class, $id);
            $em->remove($produto);
            $em->flush();
            exit("Produto deletado com sucesso.\n");
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($produto === null) {
            exit("Produto $id não existe.\n");
        }
    }

    public function imprimir($produto){
        echo sprintf(
            "Id:%s<br>Produto:%s<br>Descrição:%s<br>Preço de Custo:%s<br>Preço de Venda:%s<br>
                Fornecedor:%s<br>Tipo:%s<br>Status:%s<br>",$produto->getIdProduto(), $produto->getNome(),
            $produto->getDescricao(), $produto->getPrecoCusto(),$produto->getPrecoVenda(),
            $produto->getFornecedor(),$produto->getTipo(), $produto->getStatus());
        echo "----------------------------------<br>";
    }

    public function setAtributos($produto){
        if(isset($_GET['nome'])){$produto->setNome($_GET['nome']);}
        if(isset($_GET['descricao'])){$produto->setDescricao($_GET['descricao']);}
        if(isset($_GET['precoCusto'])){$produto->setPrecoCusto($_GET['precoCusto']);}
        if(isset($_GET['precoVenda'])){$produto->setprecoVenda($_GET['precoVenda']);}
        if(isset($_GET['fornecedor'])){$produto->setFornecedor($_GET['fornecedor']);}
        if(isset($_GET['tipo'])){$produto->setTipo($_GET['tipo']);}
        if(isset($_GET['status'])){$produto->setStatus($_GET['status']);}
    }
}