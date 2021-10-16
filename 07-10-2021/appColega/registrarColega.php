<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

session_start();//Usado para iniciar uma sessão com o usuario, fazendo existir a varivael $_SESSION
if(!isset($_SESSION['id'])){
    //Se não houver id armazenado em session, o usuario não está logado e pede para se logar
    echo "É necessario se logar para continuar!";
    echo "<br><br><a href='./login.html'>Se logar</a>";
    exit();//Finaliza a execução do programa
}

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
