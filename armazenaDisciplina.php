<?php

$dia = $_POST['dia'];
//Forma não muito elegante
//$dia = substr($dia, 8,2). '/'. substr($dia, 5, 2) . '/' . substr($dia, 0, 4);//(substr) "corta" a variavel especificada, substr(variavel, posição, quantos caracteres);

$timestamp = strtotime($dia);
$dia = date('', $timestamp);

echo "A disciplina é {$_POST['nome']}<br><br>";
echo "O professor da disciplina é {$_POST['prof']}<br><br>";
echo "O dia a disciplina é {$dia}<br><br>";
echo "A descrição da disciplina é {$_POST['desc']}<br><br>";
$arquivo = fopen('bancodeados.txt', 'a');//Abre o arquivo apontado, se não existir o arquivo, ele cria o arquivo deixando o ponteiro no final do que tiver escrito no arquivo;
fwrite($arquivo, "{$_POST['nome']}, {$_POST['prof']}, {$_POST['dia']}, {$_POST['desc']}\r\n");// Escreve no arquivo indicado, o texto inserido;
fclose($arquivo);//Fecha o arquivo
echo "<br><br>{$_POST['nome']} gravada com sucesso!";