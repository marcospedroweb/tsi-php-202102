<?php

// include 'banco/pdo.php'; //Conectando com o banco do php my admin
// include 'classes/Disciplina.class.php'; // Incluindo meu objeto



// ---------------------------CODIGO ORIGINAL

include 'banco/pdo.php';// Conectando com o banco do php my admin

include 'classes/Disciplina.class.php'; // Incluindo meu objeto

$objDisciplina = new Disciplina($bd); // passa o banco conetado por argumento, objeto Disciplina armazena esse banco atribuindo a uma variavel lá
    // agora $bd === $objDisciplina

include 'telas/header.php'; // inclui o inicio do html e head completo com bootstrap e abertura do body

if(isset($_POST['apagar'])){
    // Caso o usuario tenha clicado no botão apagar disciplina, a variavel ($_POST['apagar']) ira existir
    $apagado = $objDisciplina->apagar($_POST['apagar']); //manda para objeto Disciplina, que executa o delete
    // $_POST['apagar'] recebe o id daquela linha
    // $apagado recebe true ou falso

    // $objDisciplina->apagar($_POST['apagar']) === $bd->query("DELETE FROM disciplinas WHERE id = $id");
}

if(isset($_POST['criar'])){
    // Caso o usuario tenha clicado no botão criar disciplina, a variavel ($_POST['apagar']) ira existir
    $criado = $objDisciplina->criar($_POST); //manda para objeto Disciplina, que executa o insert
    // $_POST recebe tudo que está nessa variavel
    // $criado recebe true ou falso
    
}

$lista = $objDisciplina->listar(); // executa um select para retornar todas as colunas da tabela disciplinas
// listar() executa esse select, retornando um array, com cada registros do select, separada pelo seu respctivo id

include 'telas/lista.php'; // inclui a tabela esperando os dados de listar()

include 'telas/footer.php';
