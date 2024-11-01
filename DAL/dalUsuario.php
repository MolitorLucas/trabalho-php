<?php

namespace DAL;

use \MODEL\Usuario;

include_once '/var/www/html/trabalho-php/MODEL/usuario.php';
include_once 'conexao.php';

class DalUsuario
{

    public function selectUser(string $usuario)
    {

        $sql = "select * from usuario where usuario LIKE ?;";
        $pdo = Conexao::open();
        $query = $pdo->prepare($sql);
        $query->execute(array($usuario));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::close();
        $usuario = new \MODEL\Usuario();


        if ($linha) {
            $usuario->setId($linha['id']);
            $usuario->setUsuario($linha['usuario']);
            $usuario->setSenha($linha['senha']);

            return $usuario;
        }
        $usuario->setId(0);
        $usuario->setUsuario('');
        $usuario->setSenha('');

        return $usuario;
    }
}
