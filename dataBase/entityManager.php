<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 15:18
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
include '../config/bancoDados.php';
include '../config/entity.php';

function conexaoBandoDados()
{
    $config = Setup::createAnnotationMetadataConfiguration(paths, true);
    return $entityManager = EntityManager::create(dbParams, $config);
}