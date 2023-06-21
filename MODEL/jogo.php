<?php 
    namespace MODEL;

    class Jogo {
        private ?int $id;
        private ?string $nome;
        private ?float $preco;
        private ?Genero $genero;
        private ?Desenvolvedora $desenvolvedora;
        private ?Publisher $publisher;



        public function __construct(){

        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getPreco(){
            return $this->preco;
        }
        
        public function getGenero(){
            return $this->genero;
        }

        public function getDesenvolvedora()
        {
            return $this->desenvolvedora;
        }

        public function getPublisher()
        {
            return $this->publisher;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function setPreco(float $preco){
            $this->preco = $preco;
        }

        public function setGenero(Genero $genero){
            $this->genero = $genero;
        }

        public function setDesenvolvedora(Desenvolvedora $desenvolvedora){
            $this->desenvolvedora = $desenvolvedora;
        }

        public function setPublisher(Publisher $publisher)
        {
            $this->publisher = $publisher;
        }
    }
?>