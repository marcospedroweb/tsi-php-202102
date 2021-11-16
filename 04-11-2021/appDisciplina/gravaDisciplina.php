<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';
$_POST['prof']  = $_POST['prof']    ?? '';
$_POST['dia']   = $_POST['dia']     ?? '';
$_POST['desc']  = $_POST['desc']    ?? '';

if( empty($_POST['nome']) || empty($_POST['dia']) ){//Verifica se os campos obrigatórios foram informados

    die('<br><br>ERRO! Os campos nome e dia são obrigatórios!');
}

echo 'A disciplina é ' . $_POST['nome'];
echo '<br><br>O professor é o ' . $_POST['prof'];
echo '<br><br>Ela ocorre no dia ' . $_POST['dia'];
echo '<br><br>Descrição ' . $_POST['desc'];

//Abro o arquivo para gravar mais coisas nele
$arquivo = fopen('bancodedados.csv', 'a');

$dia = $_POST['dia'] ?? date('Y-m-d');

//Forma não muito elegante
//$dia = substr( $dia, 8, 2) . '/' . substr( $dia, 5, 2) . '/' . substr( $dia, 0, 4);

//Formatação de datas
$timestamp = strtotime($dia);
$dia = date( 'd/m/Y', $timestamp);
//FIM Formatação de datas

//Escrevo no arquivo
fwrite( $arquivo,   $_POST['nome'] . ';' . 
                    $_POST['prof'] . ';' . 
                    $dia . ';' . 
                    $_POST['desc'] . ';' . 
                    $_SERVER['REMOTE_ADDR'] . "\r\n");

//fwrite( $arquivo, "{$_POST['nome']};{$_POST['prof']};{$dia};{$_POST['desc']}\r\n");

//Fecho o arquivo
fclose($arquivo);

echo "<br><br>{$_POST['nome']} gravada com sucesso do IP {$_SERVER['REMOTE_ADDR']}!";