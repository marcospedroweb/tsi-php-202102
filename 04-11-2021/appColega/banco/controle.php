<?php
session_start();//Usado para iniciar uma sessão com o usuario, fazendo existir a varivael $_SESSION
if(!isset($_SESSION['id'])){
    //Se não houver id armazenado em session, o usuario não está logado e pede para se logar
    echo "É necessario se logar para continuar!";
    echo "<br><br><a href='./login.html'>Se logar</a>";
    exit();//Finaliza a execução do programa
}