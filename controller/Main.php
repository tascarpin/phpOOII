<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/08/2019
 * Time: 19:57
 */

//include('..\model\Produto.php');
include('..\autoload.php');

use model\Produto;
use dataBase\Conexao;

$conexao = new Conexao();
echo '<br>';

$conexao->criar(new Produto('coca', 'mata verme', 1.8, 3.5,
    'Spaipa', 'Refrigerante', 'Ativo'));