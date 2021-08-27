<?php

$dias['segunda'] = 'PI';
$dias['terça'] = 'Content management systems e direito digital';
$dias['quarta'] = 'banco de dados';
$dias['quinta'] = 'linguagens de servidor';
$dias['sexta'] = 'linguagens de script para web';
echo "Durante a semana eu tenho as seguintes disciplinas<br><br>";

foreach($dias as $dia => $aula){
    //para cada iteração, o $indice tera tal valor
    //$dias(vetor) as $dia(indice do vetor) => $aula(valor naquele indice)
    echo "<br>$dia tenho aula de $aula<br>";
}