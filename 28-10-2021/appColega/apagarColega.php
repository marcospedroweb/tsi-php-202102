<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

require_once('./banco/conectaBanco.php'); //Requere apenas 1 vez aquele arquivo, se não conseguir pegar o arquivo, dá um erro fatal no programa

require_once('./banco/controle.php');//Verifica se o usuario está logado

$_POST['id_editar'] = $_POST['id_editar'] ?? false;//Se não for definido um valor para a variavel, atribui false
if($_POST['id_editar']){
    header('Location: ./telas/editar.tela.php?id_editar=' . $_POST['id_editar']);
    exit();//Finaliza a execução do programa
}

$stmt = $bd->prepare('DELETE FROM colegas WHERE id = :id');

$success = $stmt->execute([':id' => $_POST['id_apagar']]);//Retorna um booleano

if($success){
    header('Location: index.php?success=' . $success);
}else{
    include('./telas/header.tela.php');//Mostra aquele arquivo, se não achar, segue o programa
    include('./telas/menu.tela.php');//Mostra aquele arquivo, se não achar, segue o programa

    echo "<span class='text-center h4'>Erro ao apagar o colega</span>";
    echo "<a class='btn btn-primary' href='./telas/editar.tela.php?id_editar={$_POST['id_editar']}'>Tentar novamente</a>";

    include('./telas/footer.tela.php');
}

