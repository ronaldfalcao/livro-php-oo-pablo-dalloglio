<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PDO LISTA OBJ</title>
    </head>
    <body>
        <?php
            try{
                $conn = new PDO('pgsql:dbname=livrophp; user=root; password=root; host=localhost');
                $result = $conn->query("SELECT codigo, nome FROM famosos");

                if ($result){

                    while ($row = $result->fetch(PDO::FETCH_OBJ)){
                        echo $row->codigo. '-'. $row->nome.'<br/>';
                    }

                    $conn = NULL;
                }
            }
            catch (PDOException $e){
                    print 'Erro: '.$e->getMessage().'<br/>';
                    die();
            }
            
            
        ?>
    </body>
</html>
