<?php 
    namespace BLL;

    use \DAL\DalJogo;

    include_once 'C:\xampp\htdocs\trabalho-php\DAL\dalJogo.php';

    class BllJogo {
        private DalJogo $dal;

        public function __construct(){
            $this->dal = new DalJogo();
        }
        public function select(){

            try {
                $jogos = $this->dal->select();
                return $jogos;
            }
            catch(\Exception $e) {
                echo($e->getMessage());
            }
        }

        public function selectId(int $id)
        {
            try {
                $jogo = $this->dal->selectID($id);
                return $jogo;
            }
            catch(\Exception $e){
                echo($e->getMessage());
            }
        }

        public function insert(\MODEL\Jogo $jogo){
            if($jogo->getNome() != ""){
                try {
                    $this->dal->insert($jogo);
                } catch (\Exception $e) {
                    echo ($e->getMessage());
                }
            }
        }

        public function delete(int $id){
            try{
                $this->dal->delete($id);
            } catch (\Exception $e) {
                echo ($e->getMessage());
            }
        }
    }
