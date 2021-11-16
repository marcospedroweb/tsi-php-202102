<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

require_once('./banco/controle.php');//Verifica se o usuario está logado

$_POST['novoNome'] = $_POST['novoNome'] ?? false;

if(!$_POST['novoNome']){
    //Verifica se o usuario preencheu o input

    include('./telas/header.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
    include('./telas/menu.tela.php');//Mostra aquele arquivo, se não achar, segue o programa

    echo "<span class='text-center h4'>Nome invalido, tente novamente</span>";
    echo "<a class='btn btn-primary' href='./telas/editar.tela.php?id_editar={$_POST['id_editar']}'>Tentar novamente</a>";

    include('./telas/footer.tela.php');

    exit();//Finaliza o programa
}

require_once('./banco/conectaBanco.php'); //Requere apenas 1 vez aquele arquivo, se não conseguir pegar o arquivo, dá um erro fatal no programa

$prepare = $bd->prepare("UPDATE colegas SET nome = :nome WHERE id = {$_POST['id_editar']}");

if($prepare){
    //Se encontrar um dado valido no banco, executa o update
    $success = $prepare->execute([':nome' => $_POST['novoNome']]);
    header('Location: index.php?success=' . $success);
}else{
    include('./telas/header.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
    include('./telas/menu.tela.php');//Mostra aquele arquivo, se não achar, segue o programa

    echo "<span class='text-center h4'>Erro ao editar o nome</span>";
    echo "<a class='btn btn-primary' href='./telas/editar.tela.php?id_editar={$_POST['id_editar']}'>Tentar novamente</a>";

    include('./telas/footer.tela.php');
}