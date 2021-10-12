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

$stmt = $bd->prepare('DELETE FROM
                            disciplinas
                        WHERE
                            id = :id');//DELETE FROM nomeDaTabela WHERE nomeColuna = :labelQualquerCoisa

$success = $stmt->execute([':id' => $_POST['apagar']]);//retorna um boleano

header('Location: listar.php?success=' . $success);//redireciona para a pagina indicada