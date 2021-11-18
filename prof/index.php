<?php
//BÁSICO DO BÁSICO

//muito útil para DEBUG (NUNCA USAR EM PRODUÇÃO)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//FIM muito útil para DEBUG (NUNCA USAR EM PRODUÇÃO)

//echo 'Olá mundo!';

/*
Comentário 
de 
bloco
*/

$nome = 'Luiz Fernando';//uma variável em PHP

echo 'Olá, ' . $nome . '!<br><br>';//Aqui, foi concatenando

echo "Olá, $nome!";

//CONDICIONAIS 

if( $nome == 'Luiz' ){

    echo '<br><br>O nome é igual';

}else{

    echo '<br><br>O nome não é igual';
}

echo '<br><br>';

$dia = 'segunda';

switch($dia){

    case 'segunda':

        echo 'Estude!';
    break;

    case 'terça':

        echo 'Vá para aula de CMS!';
    break;

    case 'quarta':

        echo 'Vá para aula de BD';
    break;

    case 'quinta':

        echo 'Seja feliz aqui e agora';
    break;

    case 'sexta':

        echo 'Vá para Kombuca';
    break;

    default:

        echo 'Vá descansar';
}

echo '<br><br>';

$animal = 'cachorro';

$tipo = $animal == 'cachorro' ? 'mamífero' : 'desconhecido';

$sobrenome = $sobrenome_informado ?? 'não informado';

echo "<br>Sobrenome: $sobrenome<br>";

echo "<br>$animal é um animal to tipo: $tipo<br>";

echo '<br><br>';

//LOOPINGS

echo "FOR:<br>";

for( $i = 0 ; $i < 10 ; $i++ ){

    echo "Essa é a linha $i<br>";
}

echo "WHILE:<br>";

$i = 0;

while( $i < 10 ){

    echo "Essa é a linha $i<br>";

    $i++;
}

echo "DO:<br>";

$i = 0;

do{

    echo "Essa é a linha $i<br>";

    $i++;
    
}while( $i < 10 );

echo '<br> 2 + 2 = ' . (2+2) . '!';

//COMO CHAMAR OUTROS CÓDIGOS 

include 'link.html'; //se não existir link.html dá um erro mas continua a execução

require 'link.html'; //se não existir link.html, dá um erro fatal e para o programa

include_once 'link.html'; //verifica se já foi incluído antes, se sim, não inclui novamente

require_once 'link.html'; //verifica se já foi incluído antes, se sim, não inclui novamente