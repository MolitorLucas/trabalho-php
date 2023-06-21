<?php 
    namespace MODEL;

    class Desenvolvedora {
        private ?int $id;
        private ?string $nome;
        private ?string $origem;
        private ?bool $indie;


        public function __construct(){

        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getOrigem(){
            return $this->origem;
        }
        
        public function isIndie(){
            return $this->indie;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function setOrigem(string $origem){
            $this->origem = $origem;
        }

        public function setIndie(bool $indie){
            $this->indie = $indie;
        }
    }
?>