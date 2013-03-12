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
            $xml = simplexml_load_file('paises2.xml');
            
            //Alterando os dados do XML
            $xml->populacao = '190.000.000';
            $xml->religiao = 'Cristianismo';
            $xml->geografia->clima = 'Temperado';
            
            //Inserindo nova informação no nodo país...
            $xml->addChild('presidente', 'Dilma Bolada');
            
            //Exibindo XML com as alterações...
            echo $xml->asXML();
            
            //Gravando arquivo alterado...
            file_put_contents('paises2.xml', $xml->asXML());
            
                    
        ?>
    </body>
</html>
