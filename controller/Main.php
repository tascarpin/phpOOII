<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/08/2019
 * Time: 19:57
 */

//include('..\model\Produto.php');
include('..\autoload.php');

use model\Produto as Produto;
use model\Model as Model;

//Model::criar(new Produto('coca', 'mata verme', 1.8, 3.5,
//    'Spaipa', 'Refrigerante', 'Ativo'));

$tabela = "Produto";
$parametro = array(0=>'*');

var_dump(Model::ler("$tabela", $parametro));