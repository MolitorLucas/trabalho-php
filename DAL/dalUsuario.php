<?php
    namespace DAL;

    use \MODEL\Usuario;

    include_once 'C:\xampp\htdocs\trabalho-php\MODEL\usuario.php';
    include_once 'conexao.php';

    class DalUsuario {

        public function selectUser(string $usuario){
                
            $sql = "select * from usuario where usuario LIKE ?;";
            $pdo = Conexao::open();
            $query = $pdo->prepare($sql);
            $query->execute(array($usuario));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            Conexao::close();

            $usuario = new \MODEL\Usuario();

            if ($linha != null) {
                $usuario->setId($linha['id']);
                $usuario->setUsuario($linha['usuario']);
                $usuario->setSenha($linha['senha']);
            }

            return $usuario;
            }
    }

?>