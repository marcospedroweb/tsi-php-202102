<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

session_start();//Usado para iniciar uma sessão com o usuario, fazendo existir a varivael $_SESSION

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL


//Recuperando o registro com email do usuario
$stmt = $bd->prepare('SELECT id, nome, senha FROM usuario WHERE email = :email');//Prepara o acesso ao banco, ou seja, prepara aquilo que foi determinado e retorna o nome e email se o email passado pelo usuario for igual

$stmt->execute([':email' => $_POST['email']]);

$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if($registro){
    //Se for verdadeiro, o email passado pelo usuario é igual ao que tem no banco de dados
    if(password_verify($_POST['senha'], $registro['senha'])){
        // (password_verify) verifica se a senha passado pelo usuario é compativel com a senha criptografada guardada
        
        //$_SESSION;Usado para armazenar dados
        $_SESSION['email'] = $registro['nome'];
        $_SESSION['id'] = $registro['id'];

        echo 'Menu: <a href="./index.php">acessar menu</a>';
    }else{
        session_destroy();//Se o usuario errar, a variavel sessão é destruida
        echo 'Credenciais inválidas <br><br><a href="./login.html">Tentar novamente</a>';
    }

}else{
    session_destroy();//Se o usuario errar, a variavel sessão é destruida    
    echo 'Credenciais inválidas <br><br><a href="./login.html">Tentar novamente</a>';
}