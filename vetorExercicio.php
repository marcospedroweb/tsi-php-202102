<?php
echo "teste";
echo '<br>';

$dias['segunda'] = 'PI';
$dias['terça'] = 'Content management systems e direito digital';
$dias['quarta'] = 'banco de dados';
$dias['quinta'] = 'linguagens de servidor';
$dias['sexta'] = 'linguagens de script para web';
echo "Durante a semana eu tenho as seguintes disciplinas<br><br>";

var_dump($dias);//Ajuda na depuração do codigo, mostra por completo o array

foreach($dias as $dia => $aula){
    //$dias(vetor) as $dia(indice do vetor) => $aula(valor naquele indice)
    echo "<br>$dia tenho aula de $aula<br>";
}