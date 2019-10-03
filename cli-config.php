<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 16:48
 */

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// the connection configuration
$config = Setup::createAnnotationMetadataConfiguration(paths, $isDevMode);
return ConsoleRunner::createHelperSet(EntityManager::create(dbParams, $config));
