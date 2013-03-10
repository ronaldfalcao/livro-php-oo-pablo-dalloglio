<?php
    class Cachorro{
        private $nascimento;
        
        function __construct($nome) {
            $this->nome = $nome;
        }
        
        function __set($propriedade, $valor) {
            if ($propriedade == 'Nascimento'){
                    if (count(explode('/', $valor))==3){
                        echo "Dado '$valor', atribuído à '$propriedade'<br/>";
                    }
                    else{
                        echo "Dado '$valor', não atribuído à '$propriedade'<br/>";
                    }        
            }
            else{
                $this->$propriedade = $valor;
            }
        }
    }//Fim da classe Cachorro
?>