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
  $criado = $objDisciplina->criar($_POST);
}

$lista = $objDisciplina->listar();

include './telas/index.tela.php';

include './telas/footer.tela.php';