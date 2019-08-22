<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 22/08/2019
 * Time: 11:57
 */

namespace dataBase;

include "Configuracao.php";

class Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD );
        if (mysqli_connect_errno($this->conexao)) {
            echo "Problemas para conectar no banco. Verifique os dados!";
            die();
        }else{
            echo "Conexão realizada com suscesso.";
        }
    }

    public function __destruct(){
        @mysqli_close($this->conexao);
    }
}