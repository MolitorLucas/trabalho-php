<?php 
    namespace MODEL;

    class Publisher {
        private ?int $id;
        private ?string $nome;


        public function __construct(){

        }

        public function getId()
        {
            return $this->id;
        }

        public function getNome()
        {
            return $this->nome;
        }
        
        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function setNome(string $nome)
        {
            $this->nome = $nome;
        }
    }
?>