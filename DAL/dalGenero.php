<?php
    namespace DAL;

    use \MODEL\Genero;

    include_once 'conexao.php';
    include_once 'C:\xampp\htdocs\trabalho-php\MODEL\genero.php';

    class Dalgenero {
        public function select(){

            $con = Conexao::open();
            $sql = "SELECT * FROM genero;";
            
            $lstReader = $con->query($sql);
            $con = Conexao::close();
            foreach($lstReader as $reader){
                $genero = new \MODEL\Genero();

                $genero->setId($reader['id']);
                $genero->setDescricao($reader['descricao']);
                $lstDesenvovedora[] = $genero;
            }

            return $lstDesenvovedora;
        }

        public function selectID(int $id){
            $sql = "SELECT * FROM genero WHERE id=?;";
            $con = Conexao::open(); 
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $reader = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::close(); 

            $genero = new \MODEL\Genero(); 
            $genero->setId($reader['id']);
            $genero->setDescricao($reader['descricao']);
            return $genero;
        }

        public function insert(\MODEL\Genero $genero){
            $con = Conexao::open(); 
            $sql = "INSERT INTO genero (descricao) 
                   VALUES  ('{$genero->getDescricao()}');";
            $result = $con->query($sql); 
            $con = Conexao::close();
            return $result; 
        }

        public function update(\MODEL\Genero $genero){
            $con = Conexao::open(); 
            $sql = "UPDATE genero SET descricao = ?, origem = ?, indie = ? WHERE id = ?";
     
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $query = $con->prepare($sql);
            $result = $query->execute(array($genero->getDescricao(), $genero->getId())); 
            $con = Conexao::close();
            return $result; 
        }

        public function delete(int $id){
            $sql = "DELETE FROM genero WHERE id = ?";

            $con = Conexao::open();
            $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            $query = $con->prepare($sql);
            $result = $query->execute(array($id));

            $con = Conexao::close();
            return $result;
        }
    }
