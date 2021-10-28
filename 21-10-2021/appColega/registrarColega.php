<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

require_once('./banco/controle.php');//Verifica se o usuario está logado

$nome = $_POST['nome'] ?? '';
if($nome){
    //Verificação se está vazio/undefined aquela variavel, se estiver vazio, finaliza o programa

    require_once('./banco/conectaBanco.php'); //Requere apenas 1 vez aquele arquivo, se não conseguir pegar o arquivo, dá um erro fatal no programa

    //Preparando a consulta para evitar SQL Injection
    $stmt = $bd->prepare('INSERT INTO colegas
                                (nome)
                            VALUES
                                (:nome)'); /* ('INSERT INTO nomeTabelaNoBanco 
                                                    (nomeDaColuna) 
                                                VALUES 
                                                    (:labelQualquer)')
                                            */
    $success = $stmt->execute([':nome' => $nome]);

    if($success){
        header('Location: index.php?success=' . $success);
    }else{
        include('./telas/header.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
        include('./telas/menu.tela.php');//Mostra aquele arquivo, se não achar, segue o programa

        echo "<span class='text-center h4'>Erro ao adicionar colega</span>";
        echo "<a class='btn btn-primary' href='./telas/editar.tela.php?id_editar={$_POST['id_editar']}'>Tentar novamente</a>";

        include('./telas/footer.tela.php');
    }
}
