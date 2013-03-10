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
            $willian = new stdClass();
            $willian->nome = "Willian S. Júnior";
            $willian->idade = 13;
            $willian->profissao = 'Estudante';
            
            $silvia = new stdClass();
            $silvia->nome = 'Silvia Mariano';
            $silvia->idade = 14;
            $silvia->profissao = 'Estudante';
            
            print_r($willian);
            echo '<br/>';
            print_r($silvia);
            
        ?>
    </body>
</html>
