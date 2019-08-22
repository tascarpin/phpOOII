<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 22/08/2019
 * Time: 12:06
 */

//include('..\model\Produto.php');

function autoload ($className) {
    include(__DIR__ . "/" . $className . ".php");
}
spl_autoload_register("autoload");
