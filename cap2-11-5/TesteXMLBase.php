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
            include_once './XMLBase.class.php';
            
            class Cachorro extends XMLBase{
                    
                    function __construct($nome, $idade, $raca) {
                        $this->nome = $nome;
                        $this->idade = $idade;
                        $this->raca = $raca;
                    }
            }
            
            $toto = new Cachorro('Totó', 5, 'Pitbull');
            $vava = new Cachorro('Vavá', 3, 'Dog Alemão');
            
            echo $toto->toXML();
            echo $vava->toXML();
        ?>
    </body>
</html>
