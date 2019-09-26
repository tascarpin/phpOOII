<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/09/2019
 * Time: 16:22
 */

namespace app\model;
use app\model\entity\Pedido as Pedido;
use Doctrine\ORM\ORMException;

abstract class PedidoModel
{
    private static $path = 'app\model\entity\Pedido';

    public function store(){
        $pedido = new Pedido();
        self::setAtributos($pedido);
        $em = getEntityManager();
        try {
            $em->persist($pedido);
            $em->flush();
            exit("Pedido cadastrado com sucesso.");
        } catch (ORMException $e) {
            $e->metadataCacheNotConfigured();
            exit("Falha ao criar pedido.");
        }
    }

    public function edit($id){
        $em = getEntityManager();
        $pedido = null;
        try{
            $pedido = $em->find(self::$path, $id);
            self::setAtributos($pedido);
            $em->flush();
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($pedido === null) {
            exit("Produto $id não existe.\n");
        }
    }

    public function update($id){
        $em = getEntityManager();
        $pedido = null;
        try{
            $pedido = $em->find(self::$path, $id);
            self::setAtributos($pedido);
            $em->flush();
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($pedido === null) {
            exit("Produto $id não existe.\n");
        }
    }

    public function listAll(){
        $em = getEntityManager();
        $pedidoRepository = $em->getRepository(self::$path);
        $pedidos = $pedidoRepository->findAll();
        header('Content-Type: application/json');
        foreach ($pedidos as $pedido) {
            self::imprimir($pedido);
        }
    }

    public function show($id){
        $em = getEntityManager();
        $pedido = $em->find(self::$path, $id);

        if ($pedido === null) {
            exit("Produto não encontrado.");
        }
        self::imprimir($pedido);
    }

    public function destroy($id = 5){
        $em = getEntityManager();
        $pedido = null;
        try{
            $pedido = $em->find(self::$path, $id);
            $em->remove($pedido);
            $em->flush();
        }catch (ORMException $e){
            $e->metadataCacheNotConfigured();
        }
        if ($pedido === null) {
            exit("Pedido $id não existe.\n");
        }
    }

    public function imprimir($produto){
        echo sprintf(
            "Id:%s<br>Pedido:%s<br>Descrição:%s<br>Preço de Custo:%s<br>Preço de Venda:%s<br>
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