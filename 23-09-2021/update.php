<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

$novoNome = "Linguagem de Servidor";

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

//Prepara o update
$preparada = $bd->prepare('UPDATE disciplinas SET nome = :nome WHERE id = 1');
// prepare('UPDATE nomeDaTabela SET nomeColuna = :labelQualquerCoisa WHERE id = numeroDoIdNaTabela')

if($preparada){
    $preparada -> execute([':nome' => $novoNome]);
    // echo "Update realizado com sucesso!";
}
else
    echo "Update <b>NÃO</b> realizado";




