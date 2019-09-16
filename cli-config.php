<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 13/09/2019
 * Time: 16:48
 */

use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with mechanism to retrieve EntityManager in your app
$entityManager = GetEntityManager();

return ConsoleRunner::createHelperSet($entityManager);