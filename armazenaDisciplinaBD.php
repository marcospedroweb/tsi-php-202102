<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

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

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

echo "<pre>";
var_dump($bd);