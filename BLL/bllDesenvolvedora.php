<?php

namespace BLL;

use \DAL\DalDesenvolvedora;

include_once 'C:\xampp\htdocs\trabalho-php\DAL\dalDesenvolvedora.php';

class BllDesenvolvedora
{
    private DalDesenvolvedora $dal;

    public function __construct()
    {
        $this->dal = new DalDesenvolvedora();
    }
    public function select()
    {

        try {
            $desenvolvedoras = $this->dal->select();
            return $desenvolvedoras;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function selectId(int $id)
    {
        try {
            $desenvolvedora = $this->dal->selectID($id);
            return $desenvolvedora;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function selectNome(string $nome)
    {
        try {
            $desenvolvedora = $this->dal->selectNome($nome);
            return $desenvolvedora;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }


    public function insert(\MODEL\Desenvolvedora $desenvolvedora)
    {
        if ($desenvolvedora->getNome() != "" && $desenvolvedora->getOrigem() != "") {
            try {
                $this->dal->insert($desenvolvedora);
            } catch (\Exception $e) {
                echo ($e->getMessage());
            }
        }
    }

    public function delete(int $id)
    {
        try {
            $this->dal->delete($id);
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function update(\MODEL\Desenvolvedora $desenvolvedora)
    {
        if ($desenvolvedora->getNome() != "" && $desenvolvedora->getOrigem() != "") {
            try {
                $this->dal->update($desenvolvedora);
            } catch (\Exception $e) {
                echo ($e->getMessage());
            }
        }
    }
}
