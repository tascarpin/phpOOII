<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 16/08/2019
 * Time: 19:57
 */

namespace http;

abstract class Route{

    public function put($recurso)
    {
        echo "put";
    }

    public function post($recurso)
    {
        echo "post";
    }

    public function get($recurso)
    {
        $rotas = $GLOBALS['_ROTAS'];
        $values = '';
        array_key_exists($recurso, $rotas) == true ? $values = $rotas[$recurso] : exit('Página não encontrada');
        $str = $values['controller'] . '::' . $values['funcao'];
        call_user_func($str);
    }

    public function delete($recurso)
    {
        echo "delete";
    }
}


