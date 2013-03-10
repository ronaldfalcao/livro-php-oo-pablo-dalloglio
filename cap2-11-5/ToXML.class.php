<?php

    class Cachorro{
        function __construct($nome, $idade, $raca) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->raca = $raca;
        }   
        
        function toXml (){
                    return
<<<XML
    <cachorro>
                <nome>{$this->nome}</nome>
                <idade>{$this->idade}</idade>
                <raca>{$this->raca}</raca>
   </cachorro>
XML;
        }
    
    }//Fim da classe Cachorro.

?>
