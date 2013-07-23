<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    abstract class TExpression{
        const AND_OPERATOR = 'AND';
        const OR_OPERATOR = 'OR';
        
        abstract function dump();
    } 
?>
