<?php // PHP começa ao escrever (<?php);

// Mostra qualquer erro que aconteça (NUNCA USAR EM PRODUÇÃO)
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


echo 'Olá mundo!';
echo 'teste';

$nome = 'nome aleatorio';

echo '<br> Olá, ' . $nome . '!<br>';

$sobrenome = $sobrenome_informado ?? 'não informado'; // Verifica se tal variavel ($sobrenome_informado) existe
echo "<br>sobrenome: $sobrenome<br>";

include 'link.html';//Se não encontrar o arquivo, ele da um erro mas continua a rodar o codigo abaixo

include_once 'link.html';// verifica se o arquivo já foi incluido antes, se sim, não inclui novamente

require 'link.html';//Se não encontrar o arquivo, ele da um erro e não roda mais nada que está abaixo

require_once 'link.html';// verifica se o arquivo já foi incluido antes, se sim, não inclui novamente