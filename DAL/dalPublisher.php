<?php
    namespace DAL;

    use \MODEL\Publisher;

    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\trabalho-php\MODEL\publisher.php';

    class DalPublisher {
        public function select(){

            $con = Conexao::open();
            $sql = "SELECT * FROM publisher;";
            
            $lstReader = $con->query($sql);
            $con = Conexao::close();
            $lstPublisher = [];
            foreach($lstReader as $reader){
                $publisher = new \MODEL\Publisher();

                $publisher->setId($reader['id']);
                $publisher->setNome($reader['nome']);
                $lstPublisher[] = $publisher;
            }

            return $lstPublisher;
        }

        public function selectID(int $id){
            $sql = "SELECT * FROM publisher WHERE id=?;";
            $con = Conexao::open(); 
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $reader = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::close(); 

            $publisher = new \MODEL\Publisher(); 
            $publisher->setId($reader['id']);
            $publisher->setNome($reader['nome']);
            return $publisher;
        }

        public function insert(\MODEL\Publisher $publisher){
            $con = Conexao::open(); 
            $sql = "INSERT INTO publisher (nome) 
                   VALUES  ('{$publisher->getNome()}');";
            $result = $con->query($sql); 
            $con = Conexao::close();
            return $result; 
        }

        public function update(\MODEL\Publisher $publisher){
            $con = Conexao::open(); 
            $sql = "UPDATE publisher SET nome = ? WHERE id = ?";
     
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $con->prepare($sql);
            $result = $query->execute(array($publisher->getNome(), $publisher->getId())); 
            $con = Conexao::close();
            return $result; 
        }

        public function delete(int $id){
            $sql = "DELETE FROM publisher WHERE id = ?";

            $con = Conexao::open();
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $con->prepare($sql);
            $result = $query->execute(array($id));

            $con = Conexao::close();
            return $result;
        }
    }
