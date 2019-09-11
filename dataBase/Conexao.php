<?php
/**
 * Created by PhpStorm.
 * User: Tassio Pinheiro
 * Date: 22/08/2019
 * Time: 11:57
 */

namespace dataBase;

include '../configuracoes/configuracao.php';

trait Conexao
{
    static $conexao;
    public function conectar()
    {
        self::$conexao = mysqli_connect(MYSQL_HOST, MYSQL_USER,
            MYSQL_PASSWORD, MYSQL_DBNAME );
        if (mysqli_connect_errno(self::$conexao)) {
            die();
        }else{
            return self::$conexao;
        }
    }

    public function desconectar(){
        mysqli_close(self::$conexao);
    }
}