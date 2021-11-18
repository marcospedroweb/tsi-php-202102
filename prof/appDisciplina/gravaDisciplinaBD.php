<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_POST['nome']  = $_POST['nome']    ?? '';
$_POST['prof']  = $_POST['prof']    ?? '';
$_POST['dia']   = $_POST['dia']     ?? '';
$_POST['desc']  = $_POST['desc']    ?? '';

if( empty($_POST['nome']) || empty($_POST['dia']) ){//Verifica se os campos obrigatórios foram informados

    die('<br><br>ERRO! Os campos nome e dia são obrigatórios!');
}

echo '<b>A disciplina é </b>' . $_POST['nome'];
echo '<br><br><b>O professor é o </b>' . $_POST['prof'];
echo '<br><br><b>Ela ocorre no dia </b>' . $_POST['dia'];
echo '<br><br><b>Descrição </b>' . $_POST['desc'];

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectamos com o Banco MySQL
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//Preparamos a consulta para evitar SQL Injection
$stmt = $bd->prepare('  INSERT disciplinas 
                            (nome, professor, dia, descricao, end_ip) 
                        VALUES 
                            (:nome, :professor, :dia, :descricao, :end_id)');

//Colocamos os valores para serem inseridos no banco
//em um vetor linkando label com valor passado pelo
//usuário 
$valores[':nome'] = $_POST['nome'];
$valores[':professor'] = $_POST['prof'];
$valores[':dia'] = $_POST['dia'];
$valores[':descricao'] = $_POST['desc'];
$valores[':end_id'] = $_SERVER['REMOTE_ADDR'];

//Executamos a consulta SQL
if( $stmt->execute($valores) ){

    header('Location: listar.php?gravado=1');

} else {

    //Se der tudo errado, mensagem triste
    echo "<br><br>Oh no!! Não consegui gravar no banco :-(";
}

