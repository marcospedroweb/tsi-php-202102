<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

$nome = $_POST['nome'] ?? '';
if($nome){
    //Verificação se está vazio/undefined aquela variavel, se estiver vazio, finaliza o programa

    $bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
    $bd_user = 'root';//nome do usuario no banco de dados
    $bd_pass = '';

    $bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

    //Preparando a consulta para evitar SQL Injection
    $stmt = $bd->prepare('INSERT INTO colegas
                                (nome)
                            VALUES
                                (:nome)'); /* ('INSERT INTO nomeTabelaNoBanco 
                                                    (nomeDaColuna) 
                                                VALUES 
                                                    (:labelQualquer)')
                                            */

    if($stmt->execute([':nome' => $nome])){
        echo 'Gravado com sucesso';
        echo '<br><a href="./colega.html">Voltar</a>';
    }
}
