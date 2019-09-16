<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 22/08/2019
 * Time: 12:06
 */

function autoload ($className) {
    require '../' . $className . ".php";
}
spl_autoload_register("autoload");
