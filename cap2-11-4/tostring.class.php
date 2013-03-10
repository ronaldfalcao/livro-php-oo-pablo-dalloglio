<?php
    class Cachorro{
        private $nascimento;
        
        function __construct($nome) {
            $this->nome = $nome;
        }
        
        function __toString() {
            return $this->nome;
        }
        
    }//Fim da classe Cachorro.

?>
