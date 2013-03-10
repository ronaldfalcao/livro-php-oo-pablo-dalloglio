<?php
    class Produto{
        public $codigo;
        public $descricao;
        public $quantidade;
        public $preco;
        
        const MARGEM = 10;
        
        function __construct($codigo, $descricao, $quantidade, $preco) {
            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
        }
        
        function __get($propriedade) {
            echo "Obtendo o valor de '$propriedade': <br/>";
            if ($propriedade == 'preco'){
                return $this->$propriedade * (1 + (self::MARGEM / 100));
            }
        }
    }//Fim da classe Produto.
    
?>
