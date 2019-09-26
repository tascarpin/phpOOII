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

$isDevMode = true;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'projeto_ooii',
);

$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."\src\app\model\\entity"), $isDevMode);
return ConsoleRunner::createHelperSet(EntityManager::create($dbParams, $config));
