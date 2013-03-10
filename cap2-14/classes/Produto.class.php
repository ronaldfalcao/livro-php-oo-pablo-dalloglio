<?php
    class Produto{
        public $codigo;
        public $descricao;
        public $quantidade;
        private $preco;
        
        const MARGEM = 10;
        
        function __construct($codigo, $descricao, $quantidade, $preco) {
            $this->codigo = $codigo;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->preco = $preco;
        }
        
        function __call($metodo, $parametros) {
            echo "Você executou o método: {$metodo}<br/>";
            foreach ($parametros as $key => $parametros){
                    echo "\tParâmetro $key: $parametros<br/>";
            }
        }
        
    }//fim da classe Produto.
?>
