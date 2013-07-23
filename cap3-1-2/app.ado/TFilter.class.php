<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    class TFilter extends TExpression{
        
        private $variable;
        private $operator;
        private $value;
        
        /*Método construtor
         * @param $variable = variável
         * @param $operator = operador (<,>)
         * @param value = valor que será comparado
         */
        public function __construct($variable, $operator, $value) {
            
            $this->variable = $variable;
            $this->operator = $operator;
            $this->value = $value;
        }
        //Coerção dos tipos de variáveis...
        private function transform($value){
            if(is_array($value)){
                foreach ($value as $x){
                        if(is_integer($x)){
                            $foo[]=$x;
                        }
                        elseif(is_string($x)){
                            $foo[] = "'$x'";
                        }
                }
                $result = '('.implode(',', $foo).')';
            }
            elseif (is_string($value)) {
                $result = "'$value'";
            }
            elseif (is_null($value)){
                $result = NULL;
            }
            elseif (is_boll($value)) {
                $result = $value ? 'TRUE' : 'FALSE';
            }
            else{
                $result = $value;
            }
            
            return $result;
        }
        
        public function dump() {
            return "{$this->variable}{$this->operator}{$this->value}";
        }
    }//Fim da classe
?>
