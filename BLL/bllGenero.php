<?php

namespace BLL;

use \DAL\DalGenero;

include_once 'C:\xampp\htdocs\trabalho-php\DAL\dalGenero.php';

class BllGenero
{
    private DalGenero $dal;

    public function __construct()
    {
        $this->dal = new DalGenero();
    }
    public function select()
    {

        try {
            $generos = $this->dal->select();
            return $generos;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function selectId(int $id)
    {
        try {
            $genero = $this->dal->selectID($id);
            return $genero;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function insert(\MODEL\Genero $genero)
    {
        if ($genero->getDescricao() != "") {
            try {
                $this->dal->insert($genero);
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


    public function update(\MODEL\Genero $genero)
    {
        if ($genero->getDescricao() != "") {
            try {
                $this->dal->update($genero);
            } catch (\Exception $e) {
                echo ($e->getMessage());
            }
        }
    }
}
