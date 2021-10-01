<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
//usado para depurar codigo

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);//Conecta ao banco SQL

$stmt = $bd->query('SELECT id,nome FROM colegas'); // ('SELECT nomeColuna,nomeColuna FROM nomeTabela')
echo '<table border="1">
        <thead>
            <tr>
                <th>Id</th><th>Nome</th><th>Ações</th>
            </tr>
        </thead>';

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo "<tbody>
            <tr>
                <td>{$registro['id']}</td>
                <td>{$registro['nome']}</td>
                <td>
                    <button name='id_editar' value='{$registro['id']}'>Editar</button>
                    <button name='id_apagar' value='{$registro['id']}'>Apagar</button>
                </td>
            </tr>
    </tbody>";
}//Faz um loop para retornar dos dados do banco
//fetch(PDO::FETCH_ASSOC), retorna os dados em um array

echo "</table>";
echo "<a href='./colega.html'>Voltar</a>";
    


        

