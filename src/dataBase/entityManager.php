<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 15:18
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

function getEntityManager()
{
    $config = Setup::createAnnotationMetadataConfiguration(path, true);
    return $entityManager = EntityManager::create(dbParams, $config);
}