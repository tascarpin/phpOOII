<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
require_once "../vendor/autoload.php";


use app\model\entity\Produto as Produto;
use Faker\Factory as Factory;
use Faker\ORM\Doctrine\Populator as Populator;

$gerador = Factory::create();
$em = getEntityManager();
$populador = new Populator($gerador, $em);
$populador->addEntity(Produto::class, $argv[1], produtoFactory($gerador));
//$populador->addEntity('Pedido', 10);
$insertedPKs = $populador->execute();