<?php

namespace BLL;

use \DAL\DalPublisher;

include_once '/var/www/html/trabalho-php/DAL/dalPublisher.php';

class BllPublisher
{
    private DalPublisher $dal;

    public function __construct()
    {
        $this->dal = new DalPublisher();
    }
    public function select()
    {

        try {
            $publishers = $this->dal->select();
            return $publishers;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function selectId(int $id)
    {
        try {
            $publisher = $this->dal->selectID($id);
            return $publisher;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }
    public function selectNome(string $nome)
    {
        try {
            $publisher = $this->dal->selectNome($nome);
            return $publisher;
        } catch (\Exception $e) {
            echo ($e->getMessage());
        }
    }

    public function insert(\MODEL\Publisher $publisher)
    {
        if ($publisher->getNome() != "") {
            try {
                $this->dal->insert($publisher);
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


    public function update(\MODEL\Publisher $publisher)
    {
        if ($publisher->getNome() != "") {
            try {
                $this->dal->update($publisher);
            } catch (\Exception $e) {
                echo ($e->getMessage());
            }
        }
    }
}
