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
use League\Fractal\Serializer\ArraySerializer;
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
            return "Produto cadastrado com sucesso.";//Deverá responder com um Json
        } catch (ORMException $e) {
            $e->metadataCacheNotConfigured();
            return "Falha ao criar produto.";
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
            $fractal->setSerializer(new ArraySerializer());
            $produto = new Item($produto, new ProdutoTransformer(), 'produto');
            echo $fractal->createData($produto)->toJson();
    }

    public function list(){
        $em = getEntityManager();
        $produtoRepository = $em->getRepository(Produto::class);
        $produtos = $produtoRepository->findAll();
        // Transforma em JSON
        $fractal = new Manager();
        $fractal->setSerializer(new ArraySerializer());
        $produtos = new Collection($produtos, new ProdutoTransformer(), 'produto');
        echo $fractal->createData($produtos)->toJson();
    }

    public function destroy($id){
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
        $json = file_get_contents('php://input');
        $data = (array)json_decode($json);
        if(isset($data['nome'])){$produto->setNome($data['nome']);}
        if(isset($data['descricao'])){$produto->setDescricao($data['descricao']);}
        if(isset($data['precoCusto'])){$produto->setPrecoCusto($data['precoCusto']);}
        if(isset($data['precoVenda'])){$produto->setprecoVenda($data['precoVenda']);}
        if(isset($data['fornecedor'])){$produto->setFornecedor($data['fornecedor']);}
        if(isset($data['tipo'])){$produto->setTipo($data['tipo']);}
        if(isset($data['status'])){$produto->setStatus($data['status']);}
    }
}