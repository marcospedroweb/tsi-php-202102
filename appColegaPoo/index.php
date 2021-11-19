<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include './banco/pdo.php';

include './classes/Disciplina.class.php';

$objDisciplina = new Disciplina($bd);

include './telas/header.tela.php';
include './telas/menu.tela.php';

if(isset($_POST['apagar'])){

  $apagado = $objDisciplina->apagar($_POST['apagar']);
}

if(isset($_POST['criar'])){
  if (empty($_POST['id'])) {
      $criado = $objDisciplina->criar($_POST);
  }
}

if(isset($_POST['editar'])){
  $d = $objDisciplina->listar($_POST['editar']);
  $disciplina = $d[$_POST['editar']];
  include 'telas/cadastro.tela.php';
  include 'telas/footer.tela.php';
  exit();
}

if(isset($_POST['id'])){//Se existir o $_POST['id'] que vem do form de edição, faça
  if(is_numeric($_POST['id'])){//Verifique se é numérico
      //Salve a alteração
      $alterado = $objDisciplina->editar($_POST);
  }
}

$alterado = true;

$lista = $objDisciplina->listar();

include './telas/index.tela.php';

include './telas/footer.tela.php';