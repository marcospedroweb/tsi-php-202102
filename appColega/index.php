<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

require_once('./banco/conectaBanco.php'); //Requere apenas 1 vez aquele arquivo, se não conseguir pegar o arquivo, dá um erro fatal no programa
require_once('./banco/controle.php');//Verifica se o usuario está logado

$_GET['success'] = $_GET['success'] ?? null;

if($_GET['success']){//Atualização da tabela, apagando ou editando dados
    echo "<span class='d-block h4 text-center text-success mt-5'>Tabela atualizada com sucesso</span><br><br>";
}

$stmt = $bd->query('SELECT id,imageUsuario, nome FROM colegas'); // ('SELECT nomeColuna,nomeColuna FROM nomeTabela')

$registros = $stmt->fetchAll();//Retorna todos os registros, criando um array
   
require('./telas/index.tela.php');//Faz mostrar todos os meus dados em tabela

        

