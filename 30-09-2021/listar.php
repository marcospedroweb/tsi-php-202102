<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

$sql = 'SELECT 
            nome, professor, dia, descricao
        FROM 
            disciplinas'; //Usado para pegar dados das colunas da tabela no banco de dados
            //SELECT colunasDaTabela FROM nomeDaTabela

echo '<table border="1">
        <tr>
            <th>Nome</th><th>Professor</th><th>Dia</th><th>Descrição</th>
        <tr>';

foreach ($bd->query($sql) as $registro){
    echo "<tr>
            <td>{$registro['nome']}</td><td>{$registro['professor']}</td><td>{$registro['dia']}</td><td>{$registro['descricao']}</td>
        </tr>";
}

echo '</table>';

// Armazenando a tabela inteira em um array
// $teste1 = $bd->query($sql);
// $teste2 = $teste1->fetchAll();
// $result = $teste2['nome'];
// echo $teste2[0]['nome'];