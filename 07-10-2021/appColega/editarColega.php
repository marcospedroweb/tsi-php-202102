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

$_POST['novoNome'] = $_POST['novoNome'] ?? false;

if(!$_POST['novoNome']){
    //Verifica se o usuario preencheu o input
    echo "Nome invalido, tente novamente";
    echo "<a href='verificar.php?id_editar={$_POST['id_editar']}'>Tentar novamente</a>";
    exit();//Finaliza o programa
}

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';//nome do usuario no banco de dados
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

$prepare = $bd->prepare("UPDATE colegas SET nome = :nome WHERE id = {$_POST['id_editar']}");

if($prepare){
    //Se encontrar um dado valido no banco, executa o update
    $success = $prepare->execute([':nome' => $_POST['novoNome']]);
    header('Location: index.php?success=' . $success);
}else{
    header('Location: index.php?success=false');
}