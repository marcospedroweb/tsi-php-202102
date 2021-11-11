<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//require_once('sessao/controle.php');
require_once('banco/conecta.php');

$fp = fopen( 'usuarios.csv', 'w');

$stmt = $bd->query('SELECT id, nome, email FROM usuarios');

while ( $reg = $stmt->fetch(PDO::FETCH_ASSOC) ) {

    $id = $reg['id'];

    $de = ["\r\n",';',"\n"];
    $para = [' ',':',' '];

    $nome = str_replace( $de, $para, utf8_decode($reg['nome']));
    $email = str_replace( $de, $para, utf8_decode($reg['email']));

    //$nome = filter_var( $nome, FILTER_SANITIZE_SPECIAL_CHARS);


    fwrite( $fp, "$id;$nome;$email\r\n");
}

fclose($fp);

echo "Arquivo gerado!";