<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 04/09/2019
 * Time: 10:40
 */

use Slim\Factory\AppFactory;

// Instantiate App
$app = AppFactory::create();

// Add error middleware
$app->addErrorMiddleware(true, true, true);

require '..\app\http\routes.php';

$app->run();

