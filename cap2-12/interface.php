<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ronald
 */
interface IAluno {
    
    function getNome();
    function setNome($nome);
    function setResponsavel(Pessoa $responsavel);    
}

class Aluno implements IAluno{
        
    private $nome;
        
    function setNome($nome) {
        $this->nome = $nome;
    } 
    
    function getNome() {
        return $this->nome;
    }
    
}

$joaninha = new Aluno();
$joaninha->setNome('Joana Maranhã');
echo $joaninha->getNome();

?>
