<?php

namespace BLL;

use DAL\DalUsuario;

include_once '/var/www/html/trabalho-php/DAL/dalUsuario.php';

class BllUsuario
{

    public function selectUser(string $usuario)
    {
        $dal = new  \Dal\DalUsuario();

        return $dal->selectUser($usuario);
    }
}
?>