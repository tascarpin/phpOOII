<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 16:48
 */

require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// the connection configuration
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."\..\src\app\model\\entity"), true);
return ConsoleRunner::createHelperSet(EntityManager::create(dbParams, $config));
