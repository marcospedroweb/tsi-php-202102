<?php

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

echo "um tab é assim,\t sabia?\n";
echo "\n";
echo "hello\nworld";
echo "quebra de linha no windowns é \r\n";
echo "Se eu quiser abrir aspas \"é assim\"\n";
echo "<br>";

unset($dias);
$dias['segunda'][0] = 'PI';
$dias['terça'][0] = 'Content management systems';
$dias['terça'][1] = 'direito digital';
$dias['quarta'][0] = 'banco de dados';
$dias['quinta'][0] = 'linguagens de servidor';
$dias['sexta'][0] = 'linguagens de script para web';
$dias['sexta'][1] = 'teste';


foreach($dias as $dia => $disciplinas){
    //($dias) vetor com 2 dimensões
    //$dias(vetor) as $dia(indice do vetor) => $disciplinas(valor naquele indice)
    echo "Aulas(s) no $dia: ";
    
    foreach($disciplinas as $disciplina){
        //($disciplinas) vetor com apenas 1 direção
        echo "$disciplina, ";//mostra cada valor dentro de disciplinas (valor dos subindices de 0 e 1);
    }
    echo "<br>";
}

/*

 segunda | terça   | quarta | quinta   | sexta
0 pi     | cms     | bd     | lingserv | scripweb
1        | direito |        |          | teste
2        | ead     |        |          |

*/

include('linkform.html')