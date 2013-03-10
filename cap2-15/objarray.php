<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            //Criando array de dados
            $dados_willian = array();
            $dados_willian['nome'] = "Willian S. Júnior";
            $dados_willian['idade'] = 13;
            $dados_willian['profissao'] = 'Estudante';
            
            $dados_silvia = array();
            $dados_silvia['nome'] = "Silvia Mariano";
            $dados_silvia['idade'] = 14;
            $dados_silvia['profissao'] = 'Estudante';
            
            $willian = new stdClass();
            
            foreach ($dados_willian as $chave => $valor) {
                $willian->$chave = $valor;
            }
            
            $silvia = new stdClass();
            
            foreach ($dados_silvia as $chave => $valor) {
                $silvia->$chave = $valor;
            }
            
            echo "{$willian->nome} é {$willian->profissao}".'<br/>';
            echo "{$silvia->nome} é {$silvia->profissao}".'<br/>';
            
        ?>
    </body>
</html>
