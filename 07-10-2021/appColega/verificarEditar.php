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

echo "<form action='editarColega.php' method='post'>";
echo "<label for='novoNome'>Digite o novo nome</label><br>";
echo "<input type='text' name='novoNome' id='novoNome'><br>";
echo "<button name='id_editar' value='{$_GET['id_editar']}'>Atualizar nome</button>";
echo "</form>";