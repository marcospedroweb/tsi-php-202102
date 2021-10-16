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

$_POST['id_editar'] = $_POST['id_editar'] ?? false;//Se não for definido um valor para a variavel, atribui false
if($_POST['id_editar']){
    header('Location: verificarEditar.php?id_editar=' . $_POST['id_editar']);
    exit();//Finaliza a execução do programa
}


$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';//nome do usuario no banco de dados
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

$stmt = $bd->prepare('DELETE FROM colegas WHERE id = :id');

$success = $stmt->execute([':id' => $_POST['id_apagar']]);//Retorna um booleano

if($success)
    $success = false;

header('Location: index.php?sucess=' . $success);