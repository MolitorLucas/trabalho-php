<?php

namespace DAL;

use \MODEL\Desenvolvedora;

include_once 'conexao.php';
include_once 'C:\xampp\htdocs\trabalho-php\MODEL\desenvolvedora.php';

class DalDesenvolvedora
{
    public function select()
    {

        $con = Conexao::open();
        $sql = "SELECT * FROM desenvolvedora;";

        $lstReader = $con->query($sql);
        $con = Conexao::close();
        foreach ($lstReader as $reader) {
            $desenvolvedora = new \MODEL\Desenvolvedora();

            $desenvolvedora->setId($reader['id']);
            $desenvolvedora->setNome($reader['nome']);
            $desenvolvedora->setOrigem($reader['origem']);
            $desenvolvedora->setIndie($reader['indie']);
            $lstDesenvovedora[] = $desenvolvedora;
        }

        return $lstDesenvovedora;
    }

    public function selectID(int $id)
    {
        $sql = "SELECT * FROM desenvolvedora WHERE id=?;";
        $con = Conexao::open();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $reader = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::close();

        $desenvolvedora = new \MODEL\Desenvolvedora();
        $desenvolvedora->setId($reader['id']);
        $desenvolvedora->setNome($reader['nome']);
        $desenvolvedora->setOrigem($reader['origem']);
        $desenvolvedora->setIndie($reader['indie']);
        return $desenvolvedora;
    }

    public function selectNome(string $nome)
    {
        $sql = "SELECT * FROM desenvolvedora WHERE nome LIKE '%" . $nome . "%' OR origem LIKE '%" . $nome . "%' ORDER BY nome ASC;";
        $con = Conexao::open();
        $result = $con->query($sql);
        $con = Conexao::close();
        $lstDesenvovedora = [];
        foreach ($result as $reader) {
            $desenvolvedora = new \MODEL\Desenvolvedora();
            $desenvolvedora->setId($reader['id']);
            $desenvolvedora->setNome($reader['nome']);
            $desenvolvedora->setOrigem($reader['origem']);
            $desenvolvedora->setIndie($reader['indie']);
            $lstDesenvovedora[] = $desenvolvedora;
        }
        return $lstDesenvovedora;
    }

    public function insert(\MODEL\Desenvolvedora $desenvolvedora)
    {
        $con = Conexao::open();
        $sql = "INSERT INTO desenvolvedora (nome, origem, indie) 
                   VALUES  ('{$desenvolvedora->getNome()}', '{$desenvolvedora->getOrigem()}',
                            '{$desenvolvedora->isIndie()}');";

        $result = $con->query($sql);
        $con = Conexao::close();
        return $result;
    }

    public function update(\MODEL\Desenvolvedora $desenvolvedora)
    {
        $con = Conexao::open();
        $sql = "UPDATE desenvolvedora SET nome = ?, origem = ?, indie = ? WHERE id = ?";

        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $con->prepare($sql);
        $result = $query->execute(
            array(
                $desenvolvedora->getNome(),
                $desenvolvedora->getOrigem(),
                $desenvolvedora->isIndie(),
                $desenvolvedora->getId()
            )
        );
        $con = Conexao::close();
        return $result;
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM desenvolvedora WHERE id = ?";

        $con = Conexao::open();
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $query = $con->prepare($sql);
        $result = $query->execute(array($id));

        $con = Conexao::close();
        return $result;
    }
}
