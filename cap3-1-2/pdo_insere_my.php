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
            try{
                $conn = new PDO ('mysql:host=localhost; dbname=livrophp', 'root', 'root');
                
                $conn->exec("INSERT INTO famosos (codigo, nome) VALUES (9, 'José Lins do Rego')");
                
                $conn = NULL;
            }
            catch (PDOException $e){
                print "Erro: ".$e->getMessage()."<br/>";
                drie();
            }
        ?>
    </body>
</html>
