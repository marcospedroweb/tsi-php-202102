<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

require_once('./banco/controle.php');//Verifica se o usuario está logado

session_destroy();

header('Location: ./login.html');