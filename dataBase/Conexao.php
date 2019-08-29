<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 22/08/2019
 * Time: 11:57
 */

namespace dataBase;

include "Configuracao.php";

abstract class Conexao
{
    public function conectar()
    {
        $conexao = mysqli_connect(MYSQL_HOST, MYSQL_USER,
            MYSQL_PASSWORD, MYSQL_DBNAME );
        if (mysqli_connect_errno($conexao)) {
            echo "Problemas para conectar no banco.";
            die();
        }else{
            return $conexao;
            echo "Conexão realizada com sucesso.";
        }
    }

    public function desconectar($conexao){
        mysqli_close($conexao);
    }
}