<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$novo_nome = 'Linguagem de Servidor';

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectamos com o Banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$preparada = $bd->prepare('UPDATE disciplinas SET nome = :nome WHERE id = 1');

if ($preparada){

    if ($preparada->execute([':nome' => $novo_nome])) {

        echo "FOI!!!";
    }

} else {

    echo "ERRROOOOUUU!!!";
}