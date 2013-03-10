<?php
    class Cachorro{
        public $coleira, $nome, $idade, $raca;
        
        function __construct($coleira, $nome, $idade, $raca) {
            $this->coleira = $coleira;
            $this->nome = $nome;
            $this->idade = $idade;
            $this->raca = $raca;
        }
        
        function __clone() {
            $this->coleira = $this->coleira + 1;
            $this->nome .= ' Júnior';
            $this->idade = 0;
        }
    }//Fim da classe Cachorro.
?>
