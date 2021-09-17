<?php

//Forma não muito elegante
//$dia = substr($dia, 8,2). '/'. substr($dia, 5, 2) . '/' . substr($dia, 0, 4);//(substr) "corta" a variavel especificada, substr(variavel, posição, quantos caracteres);

/* 
Formatação de datas
    $dia =  $_POST['dia'];
    $timestamp = strtotime($dia);
    $dia = date( 'd/m/Y', $timestamp);
FIM Formatação de datas
*/

$_POST['nome'] = $_POST['nome'] ?? '';
$_POST['prof'] = $_POST['prof'] ?? '';
$_POST['dia'] = $_POST['dia'] ?? '';
$_POST['desc'] = $_POST['desc'] ?? '';
//Verificação se está vazio/undefined aquela variavel

if(empty($_POST['nome']) || empty($_POST['dia'])){
    die('ERRO! Os campos nome e dia são obrigatorios');// para a execução do problema
}

echo "A disciplina é {$_POST['nome']}<br><br>";
echo "O professor da disciplina é {$_POST['prof']}<br><br>";
echo "O dia a disciplina é {$_POST['dia']}<br><br>";
echo "A descrição da disciplina é {$_POST['desc']}<br><br>";

$arquivo = fopen('bancodeados.txt', 'a');//Abre o arquivo apontado, se não existir o arquivo, ele cria o arquivo deixando o ponteiro no final do que tiver escrito no arquivo;
fwrite($arquivo, "{$_POST['nome']}, {$_POST['prof']}, {$_POST['dia']}, {$_POST['desc']}\r\n");// Escreve no arquivo indicado, o texto inserido;
fclose($arquivo);//Fecha o arquivo

echo "<br><br>{$_POST['nome']} gravada com sucesso!";

