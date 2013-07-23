<?php

    echo '<h2>Tipo booleano</h2>';
    $existe = TRUE;
    
    if ($existe){
        echo 'Sim. Existe.'.'<br/>';
    }
    else{
        echo 'Não. Não existe.'.'<br/>';
    }

    echo '<h3>Teste booleano utilizando variáveis numéricas</h3>';
    
    $temperatura = 70;
    
    $sensortermicoP = ($temperatura >= 90);
    
    if ($sensortermicoP){
        echo 'O sistema desligou pela alta temperatura: '.$temperatura.'ºC'.'<br/>';
    }
    else{
        echo 'O sistema termicamente estável: '.$temperatura.'ºC'.'<br/>';
    }
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
