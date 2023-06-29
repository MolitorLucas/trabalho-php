<?php

namespace DAL;

use \MODEL\Jogo;

include_once 'conexao.php';
include_once 'C:\xampp\htdocs\trabalho-php\MODEL\jogo.php';
include_once 'dalDesenvolvedora.php';
include_once 'dalGenero.php';
include_once 'dalPublisher.php';

class DalJogo
{
    public function select()
    {

        $con = Conexao::open();
        $sql = "SELECT * FROM jogo;";

        $lstReader = $con->query($sql);
        $con = Conexao::close();
        $lstJogo = [];
        foreach ($lstReader as $reader) {
            $jogo = new \MODEL\Jogo();

            $jogo->setId($reader['id']);
            $jogo->setNome($reader['nome']);
            $jogo->setPreco($reader['preco']);
            $dalGenero = new \DAL\DalGenero();
            $jogo->setGenero($dalGenero->selectID($reader['generoID']));
            $dalDesenvolvedora = new \DAL\DalDesenvolvedora();
            $jogo->setDesenvolvedora($dalDesenvolvedora->selectID($reader['desenvolvedoraID']));
            $dalPublisher = new \DAL\DalPublisher();
            $jogo->setPublisher($dalPublisher->selectID($reader['publisherID']));

            $lstJogo[] = $jogo;
        }

        return $lstJogo;
    }

    public function selectID(int $id)
    {
        $sql = "SELECT * FROM jogo WHERE id=?;";
        $con = Conexao::open();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $reader = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::close();

        $jogo = new \MODEL\Jogo();

        $jogo->setId($reader['id']);
        $jogo->setNome($reader['nome']);
        $jogo->setPreco($reader['preco']);
        $dalGenero = new \DAL\DalGenero();
        $jogo->setGenero($dalGenero->selectID($reader['generoID']));
        $dalDesenvolvedora = new \DAL\DalDesenvolvedora();
        $jogo->setDesenvolvedora($dalDesenvolvedora->selectID($reader['desenvolvedoraID']));
        $dalPublisher = new \DAL\DalPublisher();
        $jogo->setPublisher($dalPublisher->selectID($reader['publisherID']));
        return $jogo;
    }
    public function selectNome(string $nome)
    {
        $sql = "SELECT * FROM jogo WHERE nome LIKE '%" . $nome . "%' ORDER BY nome ASC;";
        $con = Conexao::open();
        $lstReader = $con->query($sql);
        $con = Conexao::close();
        $lstJogo = [];
        foreach ($lstReader as $reader) {
            $jogo = new \MODEL\Jogo();

            $jogo->setId($reader['id']);
            $jogo->setNome($reader['nome']);
            $jogo->setPreco($reader['preco']);
            $dalGenero = new \DAL\DalGenero();
            $jogo->setGenero($dalGenero->selectID($reader['generoID']));
            $dalDesenvolvedora = new \DAL\DalDesenvolvedora();
            $jogo->setDesenvolvedora($dalDesenvolvedora->selectID($reader['desenvolvedoraID']));
            $dalPublisher = new \DAL\DalPublisher();
            $jogo->setPublisher($dalPublisher->selectID($reader['publisherID']));

            $lstJogo[] = $jogo;
        }

        return $lstJogo;
    }

    public function insert(\MODEL\Jogo $jogo)
    {
        $con = Conexao::open();
        $sql = "INSERT INTO jogo (nome, preco, generoID, desenvolvedoraID, publisherID) 
                   VALUES  ('{$jogo->getNome()}', '{$jogo->getPreco()}', '{$jogo->getGenero()->getId()}',
                   '{$jogo->getDesenvolvedora()->getId()}', '{$jogo->getPublisher()->getId()}');";
        $result = $con->query($sql);
        $con = Conexao::close();
        return $result;
    }

    public function update(\MODEL\Jogo $jogo)
    {
        $con = Conexao::open();
        $sql = "UPDATE jogo SET nome = ?, preco = ?, generoID = ?, desenvolvedoraID = ?, publisherID = ? WHERE id = ?";

        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $con->prepare($sql);
        $result = $query->execute(array(
            $jogo->getNome(), $jogo->getPreco(), $jogo->getGenero()->getId(),
            $jogo->getDesenvolvedora()->getId(), $jogo->getPublisher()->getId(), $jogo->getId()
        ));
        $con = Conexao::close();
        return $result;
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM jogo WHERE id = ?";

        $con = Conexao::open();
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $query = $con->prepare($sql);
        $result = $query->execute(array($id));

        $con = Conexao::close();
        return $result;
    }
}
